const feather = require('feather-icons');
const fs = require('fs');
const path = require('path');

const icons = Object.keys(feather.icons)
const outPath = path.resolve(__dirname, '../src/resources/views');
const featherIconsStubClassPath = path.resolve(__dirname, '../stubs/FeatherIcons.stub');
const featherIconsClassPath = path.resolve(__dirname, '../src/LaravelFeather/FeatherIcons.php');

icons
    .forEach(key => {
        const icon = feather.icons[key];

        // Create Blade Template
        fs.writeFileSync(
            path.resolve(outPath, icon.name + '.blade.php'),
            icon.toSvg({
                class: "{{ $class ?? null }}",
                style: "{{ $style ?? null }}",
            })
        );

        // Create Blade Component
        fs.writeFileSync(
          path.resolve(`${outPath}/components`, icon.name + ".blade.php"),
          icon
            .toSvg()
            // Remove the width and height
            .replace(' width="24" height="24"', "")
            // Add default / merged attribute function
            .replace(
              /class=\"([^"]*)\"/,
              `{{ $attributes->merge(["class" => "$1"]) }}`
            )
        );
    });

// Create a class from the stub with all icons 
fs.writeFileSync(
    featherIconsClassPath,
    fs
        .readFileSync(featherIconsStubClassPath, 'utf8')
        .replace(
            '{{ icons }}',
            icons.map(icon => `'${icon}'`).join(",\n")
        )
)
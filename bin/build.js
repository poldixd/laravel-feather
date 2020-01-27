const feather = require('feather-icons');
const fs = require('fs');
const path = require('path');

const outPath = path.resolve(__dirname, '../src/resources/views');


Object.keys(feather.icons)
    .forEach(key => {
        const icon = feather.icons[key];

        fs.writeFileSync(path.resolve(outPath, icon.name + '.blade.php'), icon.toSvg({ class: "{{ $class ?? '' }}" }));
    });
const fs = require('fs');
const path = require('path');

const cssPath = path.join(__dirname, 'assets', 'css', 'style.css');
const cssContent = fs.readFileSync(cssPath, 'utf8');

const classRegex = /\.([a-zA-Z0-9_-]+)/g;
let match;
const classes = new Set();
while ((match = classRegex.exec(cssContent)) !== null) {
    classes.add(match[1]);
}

const ignoreList = ['active', 'hover', 'focus', 'before', 'after', 'nth-child', 'last-child', 'first-child'];
const validClasses = Array.from(classes).filter(c => !ignoreList.includes(c) && isNaN(c[0]));

function getFiles(dir) {
    let results = [];
    const list = fs.readdirSync(dir);
    list.forEach(file => {
        file = path.join(dir, file);
        const stat = fs.statSync(file);
        if (stat && stat.isDirectory() && !file.includes('node_modules')) {
            results = results.concat(getFiles(file));
        } else if (file.endsWith('.php') || file.endsWith('.js')) {
            results.push(file);
        }
    });
    return results;
}

const allFiles = getFiles(__dirname);
let allText = '';
allFiles.forEach(f => {
    allText += fs.readFileSync(f, 'utf8') + '\n';
});

const unusedClasses = [];
validClasses.forEach(c => {
    // Check if the class is completely missing from HTML/JS
    // And also ignore swiper classes
    if (!allText.includes(c) && !c.includes('swiper')) {
        unusedClasses.push(c);
    }
});

console.log('Unused classes:');
console.log(unusedClasses.join(', '));

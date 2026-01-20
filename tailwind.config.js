const path = require('path');

module.exports = {
    content: [
        path.join(__dirname, '*.php'),          // root PHP templates
        path.join(__dirname, '**/*.php'),       // all nested PHP files
        path.join(__dirname, 'assets/**/*.js'),
        path.join(__dirname, 'assets/**/*.css'),
    ],
    theme: {
        extend: {},
    },
    plugins: [],
};

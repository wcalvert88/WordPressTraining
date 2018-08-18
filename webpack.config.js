const path = require('path'),
settings = require('./settings');

module.exports = {
entry: {
    App: "C:/Users/Wade/Local Sites/fictional-university/app/public/wp-content/themes/fictionalUniversityTheme/js/scripts.js"
  },
  output: {
    path: path.resolve(__dirname, settings.themeLocation + "js"),
    filename: "scripts-bundled.js"
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env']
          }
        }
      }
    ]
  },
  mode: 'development'
}
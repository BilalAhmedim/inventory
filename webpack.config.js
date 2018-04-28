var path = require('path');

module.exports = {
  entry: "./app/assets/scripts/App.js",
  mode: "development",
  output: {
    path: path.resolve(__dirname, "./app/temp/scripts"),
    filename: "App.js"
  },
  devtool: 'source-map',
  module: {
   rules: [
     {
      test: /\.js$/,
      exclude: /node_modules/,
      loader: 'babel-loader'
     }
   ]
  }
}
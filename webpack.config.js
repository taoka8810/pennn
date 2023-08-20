const path = require("path");

const bundle = {
  mode: "development",
  entry: {
    notFoundModel: "./src/scripts/notFoundModel.js",
    articleSlider: "./src/scripts/articleSlider.js",
    categorySelector: "./src/scripts/categorySelector.js",
    hamburgerMenu: "./src/scripts/hamburgerMenu.js",
    rocketLaunch: "./src/scripts/rocketLaunch.js",
    rocketModel: "./src/scripts/rocketModel.js",
  },
  output: {
    filename: "[name].js",
    path: path.resolve(__dirname, "./pennn_theme/scripts"),
  },
  resolve: {
    extensions: [".js", ".glsl", "vs", "fs"],
  },
  module: {
    rules: [
      {
        exclude: /node_modules/,
        loader: "babel-loader",
      },
      {
        test: /\.(glsl|vert|frag)$/,
        use: "shader-loader",
      },
      {
        test: /\.(glb|gltf)$/,
        loader: "gltf-webpack-loader",
        options: {
          esModule: false,
        },
      },
    ],
  },
};

module.exports = [bundle];

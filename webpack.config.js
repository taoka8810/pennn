const path = require("path");

module.exports = {
  mode: "development",
  entry: "./src/rocket/model.js",
  output: {
    filename: "bundle.js",
    path: path.resolve(__dirname, "./pennn_theme/rocket"),
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

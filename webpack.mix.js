const path = require('path');

module.exports = {
  mode: 'development',
  entry: './resources/css',
  output: {
    path: path.resolve(__dirname, 'public/style/EnsalamentoStyle/css'),
    filename: 'indexEnsalamento.css',
  },
};
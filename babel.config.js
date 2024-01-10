module.exports = {
    presets: ["@babel/preset-env"],
    plugins: [
      ["@babel/plugin-proposal-decorators", { "legacy": true }]
      // Dodaj inne wtyczki, jeśli są potrzebne
    ]
  };
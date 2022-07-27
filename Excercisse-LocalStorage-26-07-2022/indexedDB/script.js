const request = indexedDB.open("library"); // on cree une base de donneés et on stock sa valeur dans une variable "request"
let db;

request.onupgradeneeded = function() {
  // on cree les zones de sockage et les indexes.
  const db = request.result;
  const store = db.createObjectStore("books", {keyPath: "isbn"});
  const titleIndex = store.createIndex("by_title", "title", {unique: true});
  const authorIndex = store.createIndex("by_author", "author");

  // on peuple avec des donneés
  store.put({title: "Quarry Memories", author: "Fred", isbn: 123456});
  store.put({title: "Water Buffaloes", author: "Fred", isbn: 234567});
  store.put({title: "Bedrock Nights", author: "Barney", isbn: 345678});
};

request.onsuccess = function() {
  db = request.result;
};
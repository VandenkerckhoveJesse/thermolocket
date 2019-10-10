import { initializeApp } from 'firebase';

const app = initializeApp({
  apiKey: "AIzaSyChu0yg6Xqs1MEgiHzeB8HFZ1wxijVRWTc",
  authDomain: "fir-app-bdae8.firebaseapp.com",
  databaseURL: "https://fir-app-bdae8.firebaseio.com",
  projectId: "fir-app-bdae8",
  storageBucket: "",
  messagingSenderId: "175474088476",
  appId: "1:175474088476:web:1bcfb8d2843ee3f8a45dd9"
});

export const db = app.database();
export const messagesRef = db.ref("messages");

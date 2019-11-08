"use strict";

document.addEventListener("DOMContentLoaded", init);

let userList = [];

function init() {
  userList = document.querySelectorAll(".users-list tbody tr");

  document
    .querySelector("#search-user")
    .addEventListener("keyup", filterUsersList);
}

function filterUsersList() {
  let usernameToFind = document.querySelector("#search-user").value;
  for (let i = 0; i < userList.length; i++) {
    let username = userList[i].querySelector(".user-list-username").innerText;
    if (username.toUpperCase().indexOf(usernameToFind.toUpperCase()) > -1) {
      userList[i].style.display = "";
    } else {
      userList[i].style.display = "none";
    }
  }
}

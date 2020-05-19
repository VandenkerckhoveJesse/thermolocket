"use strict";

document.addEventListener("DOMContentLoaded", init);

function init() {
  document
    .querySelectorAll(".current-towns li")
    .forEach(listItem => listItem.addEventListener("click", selectTown));

  document
    .querySelector(".search-current-town")
    .addEventListener("keyup", filterCurrentTownsList);

  document
    .querySelector(".search-town")
    .addEventListener("keyup", filterTownsList);
}

function selectTown(e) {
  if (isTownSelected(e.currentTarget)) {
    e.currentTarget.classList.remove("delete-town-selection");
  } else {
    e.currentTarget.classList.add("delete-town-selection");
  }
}

function isTownSelected(town) {
  return town.classList.contains("delete-town-selection");
}

function filterList(searchInputClass, listClass, listItemChildName) {
  let list = document.querySelectorAll(listClass + " li");
  let searchQuery = document.querySelector(searchInputClass).value;

  for (let i = 0; i < list.length; i++) {
    let itemName = list[i].querySelector(listItemChildName).innerHTML;
    if (itemName.toUpperCase().indexOf(searchQuery.toUpperCase()) > -1) {
      list[i].style.display = "";
    } else {
      list[i].style.display = "none";
    }
  }
}

function filterCurrentTownsList() {
  filterList(".search-current-town", ".current-towns", "a");
}

function filterTownsList() {
  filterList(".search-town", ".towns", "label");
}

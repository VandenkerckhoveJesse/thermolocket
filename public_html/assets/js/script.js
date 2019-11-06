"use strict";

document.addEventListener("DOMContentLoaded", init);

function init() {
  let currentTowns = document.querySelector(".current-towns");
  currentTowns.childNodes.forEach(listItem =>
    listItem.addEventListener("click", selectTown)
  );
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

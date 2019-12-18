"use strict";
const imageBaseURL = "images";
const imageExtension = ".jpg";
let imageNumber = "";
let imageDirection = "left";

document.addEventListener("DOMContentLoaded", init);

let imageNumberInput, imageDirectionInput;

function init() {
  imageNumberInput = document.querySelector(".image-number");
  imageDirectionInput = document.querySelector(".image-direction");
  imageNumberInput.addEventListener("keyup", showImage);
  imageNumberInput.value = "023047";
  imageDirectionInput.addEventListener("change", showImage);
  showImage();
  document.querySelector(".next-image").addEventListener("click", nextImage);
  document.querySelector(".prev-image").addEventListener("click", prevImage);
  document.querySelector(".add-image").addEventListener("click", addImage);
  document.querySelector("ul").addEventListener("click", removeImage);
  document.querySelector(".submit-form").addEventListener("click", submitForm);
  document.querySelectorAll(".has-custom-input").forEach(select => {
    select.addEventListener("change", checkCustomInput);
  });
  let addItemButtons = document.querySelectorAll(".add-item");
  addItemButtons.forEach(box => box.addEventListener("click", addItem));

  addWaarnemingBoxEventListeners();
  addRemoveButtonEventListeners();
}

const DOMstrings = {
  stepsBtnClass: "multisteps-form__progress-btn",
  stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn`),
  stepsBar: document.querySelector(".multisteps-form__progress"),
  stepsForm: document.querySelector(".multisteps-form__form"),
  stepsFormTextareas: document.querySelectorAll(".multisteps-form__textarea"),
  stepFormPanelClass: "multisteps-form__panel",
  stepFormPanels: document.querySelectorAll(".multisteps-form__panel"),
  stepPrevBtnClass: "js-btn-prev",
  stepNextBtnClass: "js-btn-next"
};

function addWaarnemingBoxEventListeners() {
  document.querySelectorAll(".waarneming-box").forEach(box => {
    box.addEventListener("change", changeBoxColor);
  });
}

function addRemoveButtonEventListeners() {
  let buttons = document.querySelectorAll(".remove-item");
  buttons.forEach(button => {
    button.addEventListener("click", removeItem);
  });
}

function submitForm(e) {
  e.preventDefault();
  let form = document.querySelector(".multisteps-form__form");
  addHouseImagesToForm(form);
  if (formIsValid()) {
    form.submit();
  } else {
    alert("Gelieve alle gegevens in te vullen");
  }
}

function formIdValid() {
  let form = document.querySelector(".multisteps-form__form");
  let inputFields = form.querySelectorAll("input");
  console.log(inputFields);

  return false;
}

function addHouseImagesToForm(form) {
  let secondaryHouseImages = document.querySelectorAll(
    ".house-image-list li img"
  );

  let hiddenImagesContainer = form.querySelector(
    ".house-images-input-container"
  );
  let primaryHouseImage = document.querySelector(".house-image img");
  let primaryHouseImageInputField = createHiddenInputField(
    primaryHouseImage.src,
    "images[]"
  );
  hiddenImagesContainer.appendChild(primaryHouseImageInputField);

  secondaryHouseImages.forEach(image => {
    hiddenImagesContainer.appendChild(
      createHiddenInputField(image.src, "images[]")
    );
  });
}

function createHiddenInputField(value, name) {
  let input = document.createElement("input");
  input.type = "hidden";
  input.name = name;
  input.value = value;
  return input;
}

function changeBoxColor(e, target) {
  //if no target is specified, set the selection-box to the one the user clicked on
  let selectionBox = typeof target === "undefined" ? e.currentTarget : target;
  if (selectionBox) {
    let waarneming = selectionBox.value;
    //finding selected option
    let selectedOption = [...selectionBox.querySelectorAll("option")].filter(
      option => option.value === waarneming
    )[0];
    //getting correct color from background-color propery of selected option
    let color = getComputedStyle(selectedOption).getPropertyValue(
      "background-color"
    );

    selectionBox.style.backgroundColor = color;
  }
}

function checkCustomInput(e) {
  let selectInputField = e.currentTarget;
  let listItem = selectInputField.closest(".list-item");
  if (selectInputField.value === "custom") {
    showChildElement(listItem, ".custom-input");
  } else {
    hideChildElement(listItem, ".custom-input");
  }
}

function addItem(e) {
  let listClassName = `.addable-list-${e.currentTarget.dataset.listName}`;
  let list = document.querySelector(listClassName);
  let listItem = list.querySelector(".list-item");
  let newListItem = listItem.cloneNode(true);

  //adding check for when custom input is selected
  newListItem
    .querySelector(".has-custom-input")
    .addEventListener("change", checkCustomInput);

  //hiding custom input field and removing value
  hideChildElement(newListItem, ".custom-input");
  newListItem.querySelector(".custom-input").value = "";

  //adding new item
  list.appendChild(newListItem);

  list.insertBefore(newListItem, list.firstElementChild);

  //set waarneming-box color
  changeBoxColor(null, newListItem.querySelector(".waarneming-box"));

  //enable button to remove item
  enableRemoveButton(newListItem);

  //adding event listeners on children
  addWaarnemingBoxEventListeners();
  addRemoveButtonEventListeners();
}

function enableRemoveButton(listItem) {
  let removeButton = listItem.querySelector(".remove-item");
  if (removeButton) {
    removeButton.disabled = false;
  }
}

function removeItem(e) {
  let button = e.currentTarget;
  let listItem = findParent(button, "list-item");
  listItem.parentNode.removeChild(listItem);
}

function hideChildElement(parent, childQuery) {
  parent.querySelector(childQuery).classList.remove("d-block");
  parent.querySelector(childQuery).classList.add("d-none");
}

function showChildElement(parent, childQuery) {
  parent.querySelector(childQuery).classList.add("d-block");
}

const removeClasses = (elemSet, className) => {
  elemSet.forEach(elem => {
    elem.classList.remove(className);
  });
};

const findParent = (elem, parentClass) => {
  let currentNode = elem;

  while (!currentNode.classList.contains(parentClass)) {
    currentNode = currentNode.parentNode;
  }

  return currentNode;
};

const getActiveStep = elem => {
  return Array.from(DOMstrings.stepsBtns).indexOf(elem);
};

const setActiveStep = activeStepNum => {
  removeClasses(DOMstrings.stepsBtns, "js-active");

  DOMstrings.stepsBtns.forEach((elem, index) => {
    if (index <= activeStepNum) {
      elem.classList.add("js-active");
    }
  });
};

const getActivePanel = () => {
  let activePanel;

  DOMstrings.stepFormPanels.forEach(elem => {
    if (elem.classList.contains("js-active")) {
      activePanel = elem;
    }
  });

  return activePanel;
};

const setActivePanel = activePanelNum => {
  removeClasses(DOMstrings.stepFormPanels, "js-active");

  DOMstrings.stepFormPanels.forEach((elem, index) => {
    if (index === activePanelNum) {
      elem.classList.add("js-active");

      setFormHeight(elem);
    }
  });
};

const formHeight = activePanel => {
  const activePanelHeight = activePanel.offsetHeight;

  DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;
};

const setFormHeight = () => {
  const activePanel = getActivePanel();

  formHeight(activePanel);
};

DOMstrings.stepsBar.addEventListener("click", e => {
  const eventTarget = e.target;

  if (!eventTarget.classList.contains(`${DOMstrings.stepsBtnClass}`)) {
    return;
  }

  const activeStep = getActiveStep(eventTarget);

  setActiveStep(activeStep);

  setActivePanel(activeStep);
});

DOMstrings.stepsForm.addEventListener("click", e => {
  const eventTarget = e.target;

  if (
    !(
      eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) ||
      eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`)
    )
  ) {
    return;
  }

  const activePanel = findParent(
    eventTarget,
    `${DOMstrings.stepFormPanelClass}`
  );

  let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(
    activePanel
  );

  if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
    activePanelNum--;
  } else {
    activePanelNum++;
  }

  setActiveStep(activePanelNum);
  setActivePanel(activePanelNum);
});

window.addEventListener("load", setFormHeight, false);

window.addEventListener("resize", setFormHeight, false);

const setAnimationType = newType => {
  DOMstrings.stepFormPanels.forEach(elem => {
    elem.dataset.animation = newType;
  });
};

//changing animation
const animationSelect = document.querySelector(".pick-animation__select");

animationSelect.addEventListener("change", () => {
  const newAnimationType = animationSelect.value;

  setAnimationType(newAnimationType);
});

function showImage() {
  imageDirection = imageDirectionInput.value;
  imageNumber = parseInt(imageNumberInput.value);
  loadImage();
}

function loadImage() {
  let imageTag = generateHouseImageTag();
  document.querySelector(".house-image").innerHTML = imageTag;
}

function generateHouseImageTag() {
  let number = imageNumber.toString();
  //adding leading zeroes
  while (number.length < 6) {
    number = "0" + number;
  }

  return `<img src="${imageBaseURL}/${imageDirection}/${number +
    imageExtension}" alt="${number}" title="${number}"/>`;
}

function nextImage() {
  imageNumber++;
  loadImage();
}

function prevImage() {
  imageNumber--;
  loadImage();
}

function removeElement(elementId) {
  // Removes an element from the document
  document.querySelector(elementId).outerHTML = "";
}

function addImage() {
  localStorage.setItem("mySavedImages", imageNumber);
  let chosenImage = localStorage.getItem("mySavedImages");
  let lenghtUl = document.querySelector("ul").getElementsByTagName("li").length;
  if (lenghtUl <= 2) {
    document.querySelector("ul").innerHTML +=
      "<li class='list-inline-item col-4 pr-2 pb-2'>" +
      generateHouseImageTag() +
      "</li>";
  }
}

function removeImage(e) {
  let tgt = e.target;
  tgt.parentNode.remove(tgt);
  // or tgt.remove
}

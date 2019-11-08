let imageNumber = 23047;

'use strict';

document.addEventListener("DOMContentLoaded", init);

function init() {
    showImage();
    document.querySelector('.next-image').addEventListener('click', nextImage);
    document.querySelector('.prev-image').addEventListener('click', prevImage);
    document.querySelector('.add-image').addEventListener('click', addImage);
    document.querySelector("ul").addEventListener("click", removeImage);

}


const DOMstrings = {
    stepsBtnClass: 'multisteps-form__progress-btn',
    stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn`),
    stepsBar: document.querySelector('.multisteps-form__progress'),
    stepsForm: document.querySelector('.multisteps-form__form'),
    stepsFormTextareas: document.querySelectorAll('.multisteps-form__textarea'),
    stepFormPanelClass: 'multisteps-form__panel',
    stepFormPanels: document.querySelectorAll('.multisteps-form__panel'),
    stepPrevBtnClass: 'js-btn-prev',
    stepNextBtnClass: 'js-btn-next'
};


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

    removeClasses(DOMstrings.stepsBtns, 'js-active');

    DOMstrings.stepsBtns.forEach((elem, index) => {

        if (index <= activeStepNum) {
            elem.classList.add('js-active');
        }

    });
};

const getActivePanel = () => {

    let activePanel;

    DOMstrings.stepFormPanels.forEach(elem => {
        if (elem.classList.contains('js-active')) {
            activePanel = elem;
        }
    });

    return activePanel;

};

const setActivePanel = activePanelNum => {

    removeClasses(DOMstrings.stepFormPanels, 'js-active');

    DOMstrings.stepFormPanels.forEach((elem, index) => {
        if (index === activePanelNum) {

            elem.classList.add('js-active');

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

DOMstrings.stepsBar.addEventListener('click', e => {

    const eventTarget = e.target;

    if (!eventTarget.classList.contains(`${DOMstrings.stepsBtnClass}`)) {
        return;
    }

    const activeStep = getActiveStep(eventTarget);

    setActiveStep(activeStep);

    setActivePanel(activeStep);
});

DOMstrings.stepsForm.addEventListener('click', e => {

    const eventTarget = e.target;

    if (!(eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) || eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`))) {
        return;
    }

    const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);

    let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(activePanel);

    if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
        activePanelNum--;

    } else {

        activePanelNum++;

    }

    setActiveStep(activePanelNum);
    setActivePanel(activePanelNum);

});

window.addEventListener('load', setFormHeight, false);

window.addEventListener('resize', setFormHeight, false);


const setAnimationType = newType => {
    DOMstrings.stepFormPanels.forEach(elem => {
        elem.dataset.animation = newType;
    });
};

//changing animation
const animationSelect = document.querySelector('.pick-animation__select');

animationSelect.addEventListener('change', () => {
    const newAnimationType = animationSelect.value;

    setAnimationType(newAnimationType);
});


function showImage() {
    document.querySelector(".house-image").innerHTML += "< src='images/" + "0" + imageNumber + '.jpg' + "' alt='" + imageNumber + "' title='" + imageNumber + "'>";
}

function nextImage() {
    removeElement(".house-image img");
    imageNumber++
    document.querySelector(".house-image").innerHTML += "<img src='images/" + "0" + imageNumber + '.jpg' + "' alt='" + imageNumber + "' title='" + imageNumber + "'>";
}

function prevImage() {
    removeElement(".house-image img");
    imageNumber--;
    document.querySelector(".house-image").innerHTML += "<img src='images/" + "0" + imageNumber + '.jpg' + "' alt='" + imageNumber + "' title='" + imageNumber + "'>";
}

function removeElement(elementId) {
    // Removes an element from the document
    document.querySelector(elementId).outerHTML = "";
}

function addImage() {
    localStorage.setItem('mySavedImages', imageNumber);
    let chosenImage = localStorage.getItem('mySavedImages');
    let lenghtUl = document.querySelector("ul").getElementsByTagName("li").length;
    console.log(lenghtUl);
    if (lenghtUl <= 2) {
        document.querySelector("ul").innerHTML += "<li class='list-inline-item'><img src='images/" + "0" + chosenImage + '.jpg' + "' alt='" + chosenImage + "' title='" + chosenImage + "'>";
    }
}

function removeImage(e) {
    let tgt = e.target;
    tgt.parentNode.remove(tgt);
    // or tgt.remove
}

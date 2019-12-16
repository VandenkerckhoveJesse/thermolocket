//appId en apiKey zijn te verkrijgen via een gratis account op algolia (community.algolia.com/places/)

const fixedOptions = {
  appId: "plSHTEPXRASR",
  apiKey: "a8d9432304cefc8c2390692c75626011",
  container: document.querySelector("#address-input"),
  templates: {
    value: function(suggestion) {
      return suggestion.name;
    }
  }
};

const reconfigurableOptions = {
  language: "be",
  countries: ["be"],
  type: "address",
  aroundLatLngViaIP: false
};

document.addEventListener("DOMContentLoaded", init);

function init() {
  const placesInstance = places(fixedOptions).configure(reconfigurableOptions);
  placesInstance.on("change", fillAddress);
}

function fillAddress(e) {
  document.querySelector("#city-input").value = e.suggestion.city || "";
  document.querySelector("#postcode-input").value = e.suggestion.postcode || "";
}

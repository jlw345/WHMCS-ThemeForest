// Checkboxes
var mixcontainerEl = document.querySelector('.mixcontainer');
var checkboxGroup = document.querySelector('.checkbox-group');
var checkboxes = checkboxGroup.querySelectorAll('input[type="checkbox"]');
checkboxGroup.addEventListener('change', function() {
    var selectors = [];
    for (var i = 0; i < checkboxes.length; i++) {
        var checkbox = checkboxes[i];
        if (checkbox.checked) selectors.push(checkbox.value);
    }
    var selectorString = selectors.length > 0 ?
        selectors.join(',') :
        'all';
    mixer.filter(selectorString);
});

// Range slider
var mixcontainer = document.querySelector('[data-ref="container"]');
var minSizeRangeInput = document.querySelector('[name="minSize"]');
var maxSizeRangeInput = document.querySelector('[name="maxSize"]');

var mixer = mixitup(mixcontainer, {
    animation: {
        duration: 350
    }
});
function getRange() {
    var min = Number(minSizeRangeInput.value);
    var max = Number(maxSizeRangeInput.value);

    return {
        min: min,
        max: max
    };
}
function handleRangeInputChange() {
    mixer.filter(mixer.getState().activeFilter);
}
function filterTestResult(testResult, target) {
    var size = Number(target.dom.el.getAttribute('data-size'));
    var range = getRange();

    if (size < range.min || size > range.max) {
        testResult = false;
    }
    return testResult;
}
mixitup.Mixer.registerFilter('testResultEvaluateHideShow', 'range', filterTestResult);
minSizeRangeInput.addEventListener('change', handleRangeInputChange);
maxSizeRangeInput.addEventListener('change', handleRangeInputChange);

// Radio Buttons
var mixcontainerEl = document.querySelector('.mixcontainer');
var radiosFilter = document.querySelector('.radios-filter');
var radiosSort = document.querySelector('.radios-sort');
radiosFilter.addEventListener('change', function() {
    var checked = radiosFilter.querySelector(':checked');
    var selector = checked ? checked.value : 'all';
    mixer.filter(selector);
});

// Select Dropdown
var mixcontainerEl = document.querySelector('.mixcontainer');
var selectFilter = document.querySelector('.select-filter');
var selectSort = document.querySelector('.select-sort');
selectFilter.addEventListener('change', function() {
    var selector = selectFilter.value;
    mixer.filter(selector);
});
// Input Search
var container = document.querySelector('[data-ref="container"]');
var inputSearch = document.querySelector('[data-ref="input-search"]');
var keyupTimeout;
var mixer = mixitup(container, {
    animation: {
        duration: 350
    },
    callbacks: {
        onMixClick: function() {
            if (this.matches('[data-filter]')) {
                inputSearch.value = '';
            }
        }
    }
});
inputSearch.addEventListener('keyup', function() {
    var searchValue;
    if (inputSearch.value.length < 3) {
        searchValue = '';
    } else {
        searchValue = inputSearch.value.toLowerCase().trim();
    }
    clearTimeout(keyupTimeout);
    keyupTimeout = setTimeout(function() {
        filterByString(searchValue);
    }, 350);
});
function filterByString(searchValue) {
    if (searchValue) {
        mixer.filter('[class*="' + searchValue + '"]');
    } else {
        mixer.filter('all');
    }
}
var isLast = function (word) {
    return $(word).next().length === 0;
  }
  
  var getNext = function (word) {
    return $(word).next();
  }
  
  var getVisible = function () {
    return document.querySelector('.is-visible');
  }
  
  var getFirst = function () {
    return $('.ss-text-wrapper').children().first();
  }
  
  var switchWords = function (current, next) {
    $(current).removeClass('is-visible').addClass('is-hidden');
    $(next).removeClass('is-hidden').addClass('is-visible');
  }
  
  var getStarted = function () {
    var current = getVisible();
    var next = getNext(current);
  
    if (next.length !== 0) {
      switchWords(current, next);
    } else {
      $(current).removeClass('is-visible').addClass('is-hidden');
      var newEl = getFirst();
      $(newEl).removeClass('is-hidden').addClass('is-visible');
    }
  }
  
  var init = function () {
    setInterval(function () { getStarted() }, 5000);
  }
  
  init();
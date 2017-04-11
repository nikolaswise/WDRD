function toggleActive (domNode) {
  if (has(domNode, 'is-active')) {
    remove(domNode, 'is-active');
  } else {
    add(domNode, 'is-active');
  }
}

function setToggleListener (controller, target) {
  var cb = toggle(target)
  var domNode = document.querySelector(controller)
  if (domNode) {
    domNode.addEventListener('click', cb)
  }
}

function toggle (target) {
  var domNodes = document.querySelectorAll(target)
  return function (e) {
    e.preventDefault();
    for (var i = 0; i < domNodes.length; i++) {
      toggleActive(domNodes[i]);
    }
  }
}

function has (domNode, className) {
  return new RegExp('(\\s|^)' + className + '(\\s|$)').test(domNode.getAttribute('class'));
}

function add (domNode, classes) {
  classes.split(' ').forEach(function (c) {
    if (!has(domNode, c)) {
      domNode.setAttribute('class', domNode.getAttribute('class') + ' ' + c);
    }
  });
}

function remove (domNode, classes) {
  classes.split(' ').forEach(function (c) {
    var removedClass = domNode.getAttribute('class').replace(new RegExp('(\\s|^)' + c + '(\\s|$)', 'g'), '$2');
    if (has(domNode, c)) {
      domNode.setAttribute('class', removedClass);
    }
  });
}

setToggleListener('.open-mobile-menu', '.navigation-mobile')
setToggleListener('.close-mobile-menu', '.navigation-mobile')
setToggleListener('.open-mobile-sidenav','.layout-aside')
setToggleListener('.close-mobile-sidenav','.layout-aside')
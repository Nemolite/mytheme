/**
 * Скрипты темы
 */
console.log('test');

/**
 * Работа табов
 */
var jsTriggers = document.querySelectorAll('.js-tab-trigger'),
    jsContents = document.querySelectorAll('.js-tab-content');
jsTriggers.forEach(function(trigger) {
   trigger.addEventListener('click', function() {
      var id = this.getAttribute('data-tab'),
          content = document.querySelector('.js-tab-content[data-tab="'+id+'"]'),
          activeTrigger = document.querySelector('.js-tab-trigger.active'),
          activeContent = document.querySelector('.js-tab-content.active');
      
      activeTrigger.classList.remove('active'); // 1
      trigger.classList.add('active'); // 2
      
      activeContent.classList.remove('active'); // 3
      content.classList.add('active'); // 4
   });
});

/**
 * Работа супер табов
 */
 var jsTriggersSuper = document.querySelectorAll('.js-tab-trigger-super'),
 jsContentsSuper = document.querySelectorAll('.js-tab-content-super');
jsTriggersSuper.forEach(function(trigger) {
trigger.addEventListener('click', function() {
   var id = this.getAttribute('data-tab'),
       content = document.querySelector('.js-tab-content-super[data-tab="'+id+'"]'),
       activeTrigger = document.querySelector('.js-tab-trigger-super.active'),
       activeContent = document.querySelector('.js-tab-content-super.active');
   
   activeTrigger.classList.remove('active'); // 1
   trigger.classList.add('active'); // 2
   
   activeContent.classList.remove('active'); // 3
   content.classList.add('active'); // 4
});
});



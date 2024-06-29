

<!-- doc for helping developmnent -->

<!-- ========== lodar of left side , it is a js function =================
     (function ($) {
  "use strict";
  var notify = $.notify(
    '<i class="fa fa-bell-o"></i><strong>Loading</strong> page Do not close this page...',
    {
      type: "theme",
      allow_dismiss: true,
      delay: 2000,
      showProgressbar: true,
      timer: 300,
      animate: {
        enter: "animated fadeInDown",
        exit: "animated fadeOutUp",
      },
    }
  );
  setTimeout(function () {
    notify.update(
      "message",
      '<i class="fa fa-bell-o"></i><strong>Loading</strong> Inner Data.'
    );
  }, 1000);
})(jQuery);

*** css of cross icon, line 3950
.notify-alert .close {
  background: unset;
  border: none;
  font-size: 15px;
  bottom: 10px !important;
}

-->
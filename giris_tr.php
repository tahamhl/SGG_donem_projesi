<!DOCTYPE html>

<html dir="ltr" lang="tr" xml:lang="tr">
  <head>
    <title>Siteye giriş yap | Bursa Teknik Üniversitesi Öğrenme Ortamı</title>
    <link
      rel="shortcut icon"
      href="https://ekampus.btu.edu.tr/pluginfile.php/1/theme_moove/favicon/1736238773/TR%20LOGO%281%29.ico"
    />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta
      name="keywords"
      content="moodle, Siteye giriş yap | Bursa Teknik Üniversitesi Öğrenme Ortamı"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://ekampus.btu.edu.tr/theme/yui_combo.php?rollup/3.18.1/yui-moodlesimple-min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />
    <script id="firstthemesheet" type="text/css">
      /** Required in order to fix style inclusion problems in IE with YUI **/
    </script>
    <link
      rel="stylesheet"
      type="text/css"
      href="https://ekampus.btu.edu.tr/theme/styles.php/moove/1736238773_1/all"
    />
    <script>
      //<![CDATA[
      var M = {};
      M.yui = {};
      M.pageloadstarttime = new Date();
      M.cfg = {
        wwwroot: "https:\/\/ekampus.btu.edu.tr",
        homeurl: {},
        sesskey: "XQeaOdoE4t",
        sessiontimeout: "7200",
        sessiontimeoutwarning: 1200,
        themerev: "1736238773",
        slasharguments: 1,
        theme: "moove",
        iconsystemmodule: "core\/icon_system_fontawesome",
        jsrev: "1736238774",
        admin: "admin",
        svgicons: true,
        usertimezone: "Avrupa\/Istanbul",
        language: "tr",
        courseId: 1,
        courseContextId: 2,
        contextid: 1,
        contextInstanceId: 0,
        langrev: 1741399217,
        templaterev: "1736238774",
        siteId: 1,
      };
      var yui1ConfigFn = function (me) {
        if (/-skin|reset|fonts|grids|base/.test(me.name)) {
          me.type = "css";
          me.path = me.path.replace(/\.js/, ".css");
          me.path = me.path.replace(
            /\/yui2-skin/,
            "/assets/skins/sam/yui2-skin"
          );
        }
      };
      var yui2ConfigFn = function (me) {
        var parts = me.name.replace(/^moodle-/, "").split("-"),
          component = parts.shift(),
          module = parts[0],
          min = "-min";
        if (/-(skin|core)$/.test(me.name)) {
          parts.pop();
          me.type = "css";
          min = "";
        }
        if (module) {
          var filename = parts.join("-");
          me.path =
            component + "/" + module + "/" + filename + min + "." + me.type;
        } else {
          me.path = component + "/" + component + "." + me.type;
        }
      };
      YUI_config = {
        debug: false,
        base: "https:\/\/ekampus.btu.edu.tr\/lib\/yuilib\/3.18.1\/",
        comboBase: "https:\/\/ekampus.btu.edu.tr\/theme\/yui_combo.php?",
        combine: true,
        filter: null,
        insertBefore: "firstthemesheet",
        groups: {
          yui2: {
            base: "https:\/\/ekampus.btu.edu.tr\/lib\/yuilib\/2in3\/2.9.0\/build\/",
            comboBase: "https:\/\/ekampus.btu.edu.tr\/theme\/yui_combo.php?",
            combine: true,
            ext: false,
            root: "2in3\/2.9.0\/build\/",
            patterns: { "yui2-": { group: "yui2", configFn: yui1ConfigFn } },
          },
          moodle: {
            name: "moodle",
            base: "https:\/\/ekampus.btu.edu.tr\/theme\/yui_combo.php?m\/1736238774\/",
            combine: true,
            comboBase: "https:\/\/ekampus.btu.edu.tr\/theme\/yui_combo.php?",
            ext: false,
            root: "m\/1736238774\/",
            patterns: {
              "moodle-": { group: "moodle", configFn: yui2ConfigFn },
            },
            filter: null,
            modules: {
              "moodle-core-notification": {
                requires: [
                  "moodle-core-notification-dialogue",
                  "moodle-core-notification-alert",
                  "moodle-core-notification-confirm",
                  "moodle-core-notification-exception",
                  "moodle-core-notification-ajaxexception",
                ],
              },
              "moodle-core-notification-dialogue": {
                requires: [
                  "base",
                  "node",
                  "panel",
                  "escape",
                  "event-key",
                  "dd-plugin",
                  "moodle-core-widget-focusafterclose",
                  "moodle-core-lockscroll",
                ],
              },
              "moodle-core-notification-alert": {
                requires: ["moodle-core-notification-dialogue"],
              },
              "moodle-core-notification-confirm": {
                requires: ["moodle-core-notification-dialogue"],
              },
              "moodle-core-notification-exception": {
                requires: ["moodle-core-notification-dialogue"],
              },
              "moodle-core-notification-ajaxexception": {
                requires: ["moodle-core-notification-dialogue"],
              },
              "moodle-core-event": { requires: ["event-custom"] },
              "moodle-core-actionmenu": {
                requires: ["base", "event", "node-event-simulate"],
              },
              "moodle-core-blocks": {
                requires: [
                  "base",
                  "node",
                  "io",
                  "dom",
                  "dd",
                  "dd-scroll",
                  "moodle-core-dragdrop",
                  "moodle-core-notification",
                ],
              },
              "moodle-core-maintenancemodetimer": {
                requires: ["base", "node"],
              },
              "moodle-core-dragdrop": {
                requires: [
                  "base",
                  "node",
                  "io",
                  "dom",
                  "dd",
                  "event-key",
                  "event-focus",
                  "moodle-core-notification",
                ],
              },
              "moodle-core-chooserdialogue": {
                requires: ["base", "panel", "moodle-core-notification"],
              },
              "moodle-core-handlebars": {
                condition: { trigger: "handlebars", when: "after" },
              },
              "moodle-core-lockscroll": { requires: ["plugin", "base-build"] },
              "moodle-core_availability-form": {
                requires: [
                  "base",
                  "node",
                  "event",
                  "event-delegate",
                  "panel",
                  "moodle-core-notification-dialogue",
                  "json",
                ],
              },
              "moodle-backup-backupselectall": {
                requires: ["node", "event", "node-event-simulate", "anim"],
              },
              "moodle-course-management": {
                requires: [
                  "base",
                  "node",
                  "io-base",
                  "moodle-core-notification-exception",
                  "json-parse",
                  "dd-constrain",
                  "dd-proxy",
                  "dd-drop",
                  "dd-delegate",
                  "node-event-delegate",
                ],
              },
              "moodle-course-categoryexpander": {
                requires: ["node", "event-key"],
              },
              "moodle-course-dragdrop": {
                requires: [
                  "base",
                  "node",
                  "io",
                  "dom",
                  "dd",
                  "dd-scroll",
                  "moodle-core-dragdrop",
                  "moodle-core-notification",
                  "moodle-course-coursebase",
                  "moodle-course-util",
                ],
              },
              "moodle-course-util": {
                requires: ["node"],
                use: ["moodle-course-util-base"],
                submodules: {
                  "moodle-course-util-base": {},
                  "moodle-course-util-section": {
                    requires: ["node", "moodle-course-util-base"],
                  },
                  "moodle-course-util-cm": {
                    requires: ["node", "moodle-course-util-base"],
                  },
                },
              },
              "moodle-form-shortforms": {
                requires: [
                  "node",
                  "base",
                  "selector-css3",
                  "moodle-core-event",
                ],
              },
              "moodle-form-dateselector": {
                requires: ["base", "node", "overlay", "calendar"],
              },
              "moodle-question-chooser": {
                requires: ["moodle-core-chooserdialogue"],
              },
              "moodle-question-searchform": { requires: ["base", "node"] },
              "moodle-availability_completion-form": {
                requires: [
                  "base",
                  "node",
                  "event",
                  "moodle-core_availability-form",
                ],
              },
              "moodle-availability_date-form": {
                requires: [
                  "base",
                  "node",
                  "event",
                  "io",
                  "moodle-core_availability-form",
                ],
              },
              "moodle-availability_grade-form": {
                requires: [
                  "base",
                  "node",
                  "event",
                  "moodle-core_availability-form",
                ],
              },
              "moodle-availability_group-form": {
                requires: [
                  "base",
                  "node",
                  "event",
                  "moodle-core_availability-form",
                ],
              },
              "moodle-availability_grouping-form": {
                requires: [
                  "base",
                  "node",
                  "event",
                  "moodle-core_availability-form",
                ],
              },
              "moodle-availability_profile-form": {
                requires: [
                  "base",
                  "node",
                  "event",
                  "moodle-core_availability-form",
                ],
              },
              "moodle-mod_assign-history": { requires: ["node", "transition"] },
              "moodle-mod_attendance-groupfilter": {
                requires: ["base", "node"],
              },
              "moodle-mod_quiz-quizbase": { requires: ["base", "node"] },
              "moodle-mod_quiz-questionchooser": {
                requires: [
                  "moodle-core-chooserdialogue",
                  "moodle-mod_quiz-util",
                  "querystring-parse",
                ],
              },
              "moodle-mod_quiz-autosave": {
                requires: [
                  "base",
                  "node",
                  "event",
                  "event-valuechange",
                  "node-event-delegate",
                  "io-form",
                  "datatype-date-format",
                ],
              },
              "moodle-mod_quiz-modform": {
                requires: ["base", "node", "event"],
              },
              "moodle-mod_quiz-toolboxes": {
                requires: [
                  "base",
                  "node",
                  "event",
                  "event-key",
                  "io",
                  "moodle-mod_quiz-quizbase",
                  "moodle-mod_quiz-util-slot",
                  "moodle-core-notification-ajaxexception",
                ],
              },
              "moodle-mod_quiz-dragdrop": {
                requires: [
                  "base",
                  "node",
                  "io",
                  "dom",
                  "dd",
                  "dd-scroll",
                  "moodle-core-dragdrop",
                  "moodle-core-notification",
                  "moodle-mod_quiz-quizbase",
                  "moodle-mod_quiz-util-base",
                  "moodle-mod_quiz-util-page",
                  "moodle-mod_quiz-util-slot",
                  "moodle-course-util",
                ],
              },
              "moodle-mod_quiz-util": {
                requires: ["node", "moodle-core-actionmenu"],
                use: ["moodle-mod_quiz-util-base"],
                submodules: {
                  "moodle-mod_quiz-util-base": {},
                  "moodle-mod_quiz-util-slot": {
                    requires: ["node", "moodle-mod_quiz-util-base"],
                  },
                  "moodle-mod_quiz-util-page": {
                    requires: ["node", "moodle-mod_quiz-util-base"],
                  },
                },
              },
              "moodle-message_airnotifier-toolboxes": {
                requires: ["base", "node", "io"],
              },
              "moodle-editor_atto-editor": {
                requires: [
                  "node",
                  "transition",
                  "io",
                  "overlay",
                  "escape",
                  "event",
                  "event-simulate",
                  "event-custom",
                  "node-event-html5",
                  "node-event-simulate",
                  "yui-throttle",
                  "moodle-core-notification-dialogue",
                  "moodle-editor_atto-rangy",
                  "handlebars",
                  "timers",
                  "querystring-stringify",
                ],
              },
              "moodle-editor_atto-plugin": {
                requires: [
                  "node",
                  "base",
                  "escape",
                  "event",
                  "event-outside",
                  "handlebars",
                  "event-custom",
                  "timers",
                  "moodle-editor_atto-menu",
                ],
              },
              "moodle-editor_atto-menu": {
                requires: [
                  "moodle-core-notification-dialogue",
                  "node",
                  "event",
                  "event-custom",
                ],
              },
              "moodle-editor_atto-rangy": { requires: [] },
              "moodle-report_eventlist-eventfilter": {
                requires: [
                  "base",
                  "event",
                  "node",
                  "node-event-delegate",
                  "datatable",
                  "autocomplete",
                  "autocomplete-filters",
                ],
              },
              "moodle-report_loglive-fetchlogs": {
                requires: [
                  "base",
                  "event",
                  "node",
                  "io",
                  "node-event-delegate",
                ],
              },
              "moodle-gradereport_history-userselector": {
                requires: [
                  "escape",
                  "event-delegate",
                  "event-key",
                  "handlebars",
                  "io-base",
                  "json-parse",
                  "moodle-core-notification-dialogue",
                ],
              },
              "moodle-qbank_editquestion-chooser": {
                requires: ["moodle-core-chooserdialogue"],
              },
              "moodle-tool_lp-dragdrop-reorder": {
                requires: ["moodle-core-dragdrop"],
              },
              "moodle-assignfeedback_editpdf-editor": {
                requires: [
                  "base",
                  "event",
                  "node",
                  "io",
                  "graphics",
                  "json",
                  "event-move",
                  "event-resize",
                  "transition",
                  "querystring-stringify-simple",
                  "moodle-core-notification-dialog",
                  "moodle-core-notification-alert",
                  "moodle-core-notification-warning",
                  "moodle-core-notification-exception",
                  "moodle-core-notification-ajaxexception",
                ],
              },
              "moodle-atto_accessibilitychecker-button": {
                requires: ["color-base", "moodle-editor_atto-plugin"],
              },
              "moodle-atto_accessibilityhelper-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_align-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_bold-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_charmap-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_clear-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_collapse-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_emojipicker-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_emoticon-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_equation-button": {
                requires: [
                  "moodle-editor_atto-plugin",
                  "moodle-core-event",
                  "io",
                  "event-valuechange",
                  "tabview",
                  "array-extras",
                ],
              },
              "moodle-atto_h5p-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_html-button": {
                requires: [
                  "promise",
                  "moodle-editor_atto-plugin",
                  "moodle-atto_html-beautify",
                  "moodle-atto_html-codemirror",
                  "event-valuechange",
                ],
              },
              "moodle-atto_html-codemirror": {
                requires: ["moodle-atto_html-codemirror-skin"],
              },
              "moodle-atto_html-beautify": {},
              "moodle-atto_image-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_indent-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_italic-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_link-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_managefiles-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_managefiles-usedfiles": {
                requires: ["node", "escape"],
              },
              "moodle-atto_media-button": {
                requires: [
                  "moodle-editor_atto-plugin",
                  "moodle-form-shortforms",
                ],
              },
              "moodle-atto_noautolink-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_orderedlist-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_recordrtc-button": {
                requires: [
                  "moodle-editor_atto-plugin",
                  "moodle-atto_recordrtc-recording",
                ],
              },
              "moodle-atto_recordrtc-recording": {
                requires: ["moodle-atto_recordrtc-button"],
              },
              "moodle-atto_rtl-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_strike-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_subscript-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_superscript-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_table-button": {
                requires: [
                  "moodle-editor_atto-plugin",
                  "moodle-editor_atto-menu",
                  "event",
                  "event-valuechange",
                ],
              },
              "moodle-atto_teamsmeeting-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_title-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_underline-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_undo-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_unorderedlist-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
            },
          },
          gallery: {
            name: "gallery",
            base: "https:\/\/ekampus.btu.edu.tr\/lib\/yuilib\/gallery\/",
            combine: true,
            comboBase: "https:\/\/ekampus.btu.edu.tr\/theme\/yui_combo.php?",
            ext: false,
            root: "gallery\/1736238774\/",
            patterns: { "gallery-": { group: "gallery" } },
          },
        },
        modules: {
          core_filepicker: {
            name: "core_filepicker",
            fullpath:
              "https:\/\/ekampus.btu.edu.tr\/lib\/javascript.php\/1736238774\/repository\/filepicker.js",
            requires: [
              "base",
              "node",
              "node-event-simulate",
              "json",
              "async-queue",
              "io-base",
              "io-upload-iframe",
              "io-form",
              "yui2-treeview",
              "panel",
              "cookie",
              "datatable",
              "datatable-sort",
              "resize-plugin",
              "dd-plugin",
              "escape",
              "moodle-core_filepicker",
              "moodle-core-notification-dialogue",
            ],
          },
          core_comment: {
            name: "core_comment",
            fullpath:
              "https:\/\/ekampus.btu.edu.tr\/lib\/javascript.php\/1736238774\/comment\/comment.js",
            requires: [
              "base",
              "io-base",
              "node",
              "json",
              "yui2-animation",
              "overlay",
              "escape",
            ],
          },
        },
        logInclude: [],
        logExclude: [],
        logLevel: null,
      };
      M.yui.loader = { modules: {} };

      //]]>
    </script>

    <style>
      #page-footer {
        display: none !important;
      }
    </style>
    <meta name="robots" content="noindex" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>

  <body
    id="page-login-index"
    class="format-site path-login chrome dir-ltr lang-tr yui-skin-sam yui3-skin-sam ekampus-btu-edu-tr pagelayout-login course-1 context-1 notloggedin theme moove-login"
  >
    <div
      class="toast-wrapper mx-auto py-0 fixed-top"
      role="status"
      aria-live="polite"
    ></div>

    <div id="page-wrapper">
      <div>
        <a class="sr-only sr-only-focusable" href="#maincontent"
          >Ana içeriğe git</a
        >
      </div>
      <script src="https://ekampus.btu.edu.tr/lib/javascript.php/1736238774/lib/polyfills/polyfill.js"></script>
      <script src="https://ekampus.btu.edu.tr/theme/yui_combo.php?rollup/3.18.1/yui-moodlesimple-min.js"></script>
      <script src="https://ekampus.btu.edu.tr/lib/javascript.php/1736238774/lib/javascript-static.js"></script>
      <script>
        //<![CDATA[
        document.body.className += " jsenabled";
        //]]>
      </script>

      <div id="page" class="container-fluid mt-0">
        <div id="page-content" class="row">
          <div id="region-main-box" class="col-12">
            <section id="region-main" class="col-12 h-100" aria-label="İçerik">
              <div class="login-wrapper">
                <div class="login-container">
                  <div role="main">
                    <span id="maincontent"></span>
                    <div class="loginform row">
                      <div class="col">
                        <div id="loginlogo" class="login-logo">
                          <img
                            id="logoimage"
                            src="https://ekampus.btu.edu.tr/pluginfile.php/1/theme_moove/logo/1736238773/1691144844_9b7ac2a65eb608c3e1cc.png"
                            class="img-fluid"
                            alt="Bursa Teknik Üniversitesi"
                          />
                          <h1 class="login-heading sr-only">
                            Bursa Teknik Üniversitesi sayfasına giriş yap
                          </h1>
                        </div>

                        <form
                          class="login-form"
                          action="login.php"
                          method="post"
                          id="login"
                        >
                          <input
                            type="hidden"
                            name="logintoken"
                            value="2T1P8F6m46rU29LSj5ZLqP91RltFYwCh"
                          />
                          <div class="login-form-username form-group">
                            <label for="username" class="sr-only">
                              Kullanıcı adı
                            </label>
                            <input
                              type="text"
                              name="username"
                              id="username"
                              class="form-control form-control-lg"
                              value=""
                              placeholder="Kullanıcı adı"
                              autocomplete="username"
                            />
                          </div>
                          <div class="login-form-password form-group">
                            <label for="password" class="sr-only">Şifre</label>
                            <input
                              type="password"
                              name="password"
                              id="password"
                              value=""
                              class="form-control form-control-lg"
                              placeholder="Şifre"
                              autocomplete="current-password"
                            />
                          </div>
                          <div class="login-form-submit form-group">
                            <button
                              class="btn btn-primary btn-block btn-lg"
                              type="submit"
                              id="loginbtn"
                            >
                              Giriş yap
                            </button>
                          </div>
                          <div
                            class="login-form-forgotpassword form-group text-center"
                          >
                            <a
                              href="https://ekampus.btu.edu.tr/login/forgot_password.php"
                              >Şifrenizi mi unuttunuz?</a
                            >
                          </div>
                        </form>
                        <div class="d-flex mt-2">
                          <div class="login-languagemenu">
                            <div
                              class="action-menu moodle-actionmenu"
                              id="action-menu-0"
                              data-enhance="moodle-core-actionmenu"
                            >
                              <div
                                class="menubar d-flex"
                                id="action-menu-0-menubar"
                              >
                                <div class="action-menu-trigger">
                                  <div class="dropdown">
                                    <a
                                      href="#"
                                      tabindex="0"
                                      class="dropdown-toggle icon-no-margin"
                                      id="action-menu-toggle-0"
                                      aria-label="Türkçe ‎(tr)‎"
                                      data-toggle="dropdown"
                                      role="button"
                                      aria-haspopup="true"
                                      aria-expanded="false"
                                      aria-controls="action-menu-0-menu"
                                    >
                                      Türkçe ‎(tr)‎

                                      <b class="caret"></b>
                                    </a>
                                    <div
                                      class="dropdown-menu menu dropdown-menu-right"
                                      id="action-menu-0-menu"
                                      data-rel="menu-content"
                                      aria-labelledby="action-menu-toggle-0"
                                      role="menu"
                                    >
                                      <a
                                        href="giris_en.php"
                                        class="dropdown-item menu-action"
                                        data-lang="en"
                                        lang="en"
                                        role="menuitem"
                                        tabindex="-1"
                                      >
                                        <span class="menu-action-text"
                                          >English ‎(en)‎</span
                                        >
                                      </a>
                                      <a
                                        href="#"
                                        class="dropdown-item menu-action"
                                        role="menuitem"
                                        tabindex="-1"
                                      >
                                        <span class="menu-action-text"
                                          >Türkçe ‎(tr)‎</span
                                        >
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <button
                            type="button"
                            class="ml-auto btn btn-link"
                            data-modal="alert"
                            data-modal-title-str='["cookiesenabled", "core"]'
                            data-modal-content-str='["cookiesenabled_help_html", "core"]'
                          >
                            <i class="fa fa-question-circle"></i> Çerez
                            bildirimi
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>

    <div class="d-none">
      <a
        class="mobilelink"
        href="https://download.moodle.org/mobile?version=2024042203&amp;lang=tr&amp;iosappid=633359593&amp;androidappid=com.moodle.moodlemobile&amp;siteurl=https%3A%2F%2Fekampus.btu.edu.tr"
        >Mobil uygulamayı edinin</a
      >
      <script>
        //<![CDATA[
        var require = {
          baseUrl: "https://ekampus.btu.edu.tr/lib/requirejs.php/1736238774/",
          // We only support AMD modules with an explicit define() statement.
          enforceDefine: true,
          skipDataMain: true,
          waitSeconds: 0,

          paths: {
            jquery:
              "https://ekampus.btu.edu.tr/lib/javascript.php/1736238774/lib/jquery/jquery-3.7.1.min",
            jqueryui:
              "https://ekampus.btu.edu.tr/lib/javascript.php/1736238774/lib/jquery/ui-1.13.2/jquery-ui.min",
            jqueryprivate:
              "https://ekampus.btu.edu.tr/lib/javascript.php/1736238774/lib/requirejs/jquery-private",
          },

          // Custom jquery config map.
          map: {
            // '*' means all modules will get 'jqueryprivate'
            // for their 'jquery' dependency.
            "*": { jquery: "jqueryprivate" },
            // Stub module for 'process'. This is a workaround for a bug in MathJax (see MDL-60458).
            "*": { process: "core/first" },

            // 'jquery-private' wants the real jQuery module
            // though. If this line was not here, there would
            // be an unresolvable cyclic dependency.
            jqueryprivate: { jquery: "jquery" },
          },
        };

        //]]>
      </script>
      <script src="javascript.js"></script>
      <script>
        //<![CDATA[
        M.util.js_pending("core/first");
        require(["core/first"], function () {
          require(["core/prefetch"]);
          M.util.js_pending("filter_mathjaxloader/loader");
          require(["filter_mathjaxloader/loader"], function (amd) {
            amd.configure({
              mathjaxconfig:
                '\nMathJax.Hub.Config({\n    config: ["Accessible.js", "Safe.js"],\n    errorSettings: { message: ["!"] },\n    skipStartupTypeset: true,\n    messageStyle: "none"\n});\n',
              lang: "tr",
            });
            M.util.js_complete("filter_mathjaxloader/loader");
          });
          require(["media_videojs/loader"], function (loader) {
            loader.setUp("tr");
          });

          M.util.js_pending("theme_boost/loader");
          require(["theme_boost/loader"], function () {
            M.util.js_complete("theme_boost/loader");
          });
          require(["core_form/events"], function (FormEvent) {
            function autoFocus() {
              const userNameField = document.getElementById("username");
              if (userNameField.value.length == 0) {
                userNameField.focus();
              } else {
                document.getElementById("password").focus();
              }
            }
            autoFocus();
            window.addEventListener(
              FormEvent.eventTypes.fieldStructureChanged,
              autoFocus
            );
          });
          require(["core/togglesensitive"], function (ToggleSensitive) {
            ToggleSensitive.init("password", 1);
          });
          require(["core_form/submit"], function (Submit) {
            Submit.init("loginbtn");
          });
          M.util.js_pending("core/notification");
          require(["core/notification"], function (amd) {
            amd.init(1, []);
            M.util.js_complete("core/notification");
          });
          M.util.js_pending("core/log");
          require(["core/log"], function (amd) {
            amd.setConfig({ level: "warn" });
            M.util.js_complete("core/log");
          });
          M.util.js_pending("core/page_global");
          require(["core/page_global"], function (amd) {
            amd.init();
            M.util.js_complete("core/page_global");
          });
          M.util.js_pending("core/utility");
          require(["core/utility"], function (amd) {
            M.util.js_complete("core/utility");
          });
          M.util.js_pending("core/storage_validation");
          require(["core/storage_validation"], function (amd) {
            amd.init(null);
            M.util.js_complete("core/storage_validation");
          });
          M.util.js_complete("core/first");
        });
        //]]>
      </script>
      <script src="https://cdn.jsdelivr.net/npm/mathjax@2.7.9/MathJax.js?delayStartupUntil=configured"></script>
      <script>
        //<![CDATA[
        M.str = {
          moodle: {
            lastmodified: "En son de\u011fi\u015ftirme",
            name: "Ad\u0131",
            error: "Hata",
            info: "Bilgi",
            yes: "Evet",
            no: "Hay\u0131r",
            cancel: "\u0130ptal",
            confirm: "Onayla",
            areyousure: "Emin misiniz?",
            closebuttontitle: "Kapat",
            unknownerror: "Bilinmeyen hata",
            file: "Dosya",
            url: "URL",
            collapseall: "T\u00fcm\u00fcn\u00fc daralt",
            expandall: "T\u00fcm\u00fcn\u00fc geni\u015flet",
          },
          repository: {
            type: "T\u00fcr",
            size: "Boyut",
            invalidjson: "Ge\u00e7ersiz JSON ifadesi",
            nofilesattached: "Dosya ili\u015fkilendirilmedi",
            filepicker: "Dosya se\u00e7ici",
            logout: "\u00c7\u0131k\u0131\u015f",
            nofilesavailable: "Uygun dosya yok",
            norepositoriesavailable:
              "Maalesef, mevcut depolar\u0131n\u0131zdan hi\u00e7biri bu bi\u00e7imde dosya d\u00f6nd\u00fcremez.",
            fileexistsdialogheader: "Bu dosya var",
            fileexistsdialog_editor:
              "Bu ada sahip bir dosya, d\u00fczenlemekte oldu\u011funuz metne zaten eklenmi\u015ftir.",
            fileexistsdialog_filemanager: "Bu isimle zaten bir dosya var",
            renameto: '\u015e\u00f6yle yeniden adland\u0131r "{$a}"',
            referencesexist: "Bu dosyaya {$a} ba\u011flant\u0131 var",
            select: "Se\u00e7",
          },
          admin: {
            confirmdeletecomments:
              "Se\u00e7ilen yorumu\/yorumlar\u0131 silmek istedi\u011finizden emin misiniz?",
            confirmation: "Onaylama",
          },
          debug: {
            debuginfo: "Hata ay\u0131klama bilgisi",
            line: "Sat\u0131r",
            stacktrace: "Y\u0131\u011f\u0131n izleme",
          },
          langconfig: { labelsep: ":" },
        };
        //]]>
      </script>
      <script>
        //<![CDATA[
        (function () {
          M.util.help_popups.setup(Y);
          M.util.js_pending("random67e2d5dd473ed4");
          Y.on("domready", function () {
            M.util.js_complete("init");
            M.util.js_complete("random67e2d5dd473ed4");
          });
        })();
        //]]>
      </script>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        function temizleDialogModal() {
            // Diyalog elementlerini temizle
            const dialogElements = document.querySelectorAll('.moodle-dialogue, .moodle-dialogue-base, [role="dialog"]');
            dialogElements.forEach(element => {
                element.remove();
            });

            // Modal elementlerini temizle
            const modalElements = document.querySelectorAll('.modal, .modal-backdrop');
            modalElements.forEach(element => {
                element.remove();
            });

            // YUI widget mask'lerini temizle
            const maskElements = document.querySelectorAll('.yui3-widget-mask');
            maskElements.forEach(element => {
                element.remove();
            });

            // Body'den modal class'ını kaldır
            document.body.classList.remove('modal-open');
            document.body.style.overflow = '';
        }

        // Sayfa yüklendiğinde ve her 50ms'de bir kontrol et
        temizleDialogModal();
        const intervalId = setInterval(temizleDialogModal, 50);

        // Modal tetikleyici butonlarını devre dışı bırak
        document.querySelectorAll('[data-toggle="modal"]').forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                return false;
            });
        });

        // Sayfadan ayrılırken interval'i temizle
        window.addEventListener('beforeunload', () => {
            clearInterval(intervalId);
        });
    });
    </script>
  </body>
</html>

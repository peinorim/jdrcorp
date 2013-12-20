<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_10d62700a2835c44fbcce318806b56551ef8a86bb9876d77335577df0aedd26c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  38 => 13,  35 => 7,  87 => 20,  25 => 3,  21 => 2,  94 => 22,  85 => 19,  79 => 29,  75 => 28,  50 => 15,  41 => 9,  24 => 2,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  121 => 46,  115 => 43,  105 => 40,  101 => 24,  91 => 35,  69 => 25,  62 => 24,  51 => 15,  49 => 19,  93 => 9,  78 => 40,  27 => 4,  57 => 16,  54 => 21,  43 => 8,  40 => 8,  70 => 26,  110 => 35,  106 => 34,  102 => 33,  98 => 40,  89 => 20,  86 => 28,  81 => 28,  74 => 26,  66 => 25,  63 => 22,  42 => 12,  36 => 7,  32 => 6,  46 => 14,  37 => 12,  34 => 11,  30 => 5,  61 => 11,  55 => 13,  47 => 8,  29 => 4,  26 => 3,  22 => 2,  152 => 57,  143 => 51,  135 => 46,  123 => 47,  120 => 39,  117 => 44,  114 => 33,  112 => 42,  108 => 31,  104 => 30,  100 => 29,  96 => 28,  92 => 21,  88 => 6,  84 => 25,  80 => 19,  76 => 23,  72 => 16,  68 => 14,  64 => 12,  60 => 19,  56 => 9,  52 => 17,  48 => 16,  44 => 10,  39 => 6,  33 => 6,  31 => 5,  19 => 1,);
    }
}

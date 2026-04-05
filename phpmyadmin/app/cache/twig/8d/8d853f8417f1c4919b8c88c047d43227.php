<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* database/privileges/index.twig */
class __TwigTemplate_661dbf6bc4f5388d44bb0f01faed5a79 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"container\">
  ";
        // line 2
        if ((($tmp = (isset($context["is_superuser"]) || array_key_exists("is_superuser", $context) ? $context["is_superuser"] : (function () { throw new RuntimeError('Variable "is_superuser" does not exist.', 2, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "    <h2>
      ";
            // line 4
            yield PhpMyAdmin\Html\Generator::getIcon("b_usrcheck");
            yield "
      ";
            // line 5
            yield Twig\Extension\CoreExtension::sprintf(\_gettext("Users having access to \"%s\""), ((((("<a href=\"" . (isset($context["database_url"]) || array_key_exists("database_url", $context) ? $context["database_url"] : (function () { throw new RuntimeError('Variable "database_url" does not exist.', 5, $this->source); })())) . PhpMyAdmin\Url::getCommon(["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 5, $this->source); })())], "&")) . "\">") . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 5, $this->source); })()), "html")) . "</a>"));
            yield "
    </h2>

    <form id=\"usersForm\" action=\"";
            // line 8
            yield PhpMyAdmin\Url::getFromRoute("/server/privileges");
            yield "\" class=\"card mb-3\">
      ";
            // line 9
            yield PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 9, $this->source); })()));
            yield "

      <div class=\"card-body\">
        <div class=\"table-responsive jsresponsive\">
          <table class=\"table table-striped table-hover w-auto\">
            <thead>
              <tr>
                <th></th>
                <th scope=\"col\">";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("User name"), "html", null, true);
            yield "</th>
                <th scope=\"col\">";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Host name"), "html", null, true);
            yield "</th>
                <th scope=\"col\">";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Type"), "html", null, true);
            yield "</th>
                <th scope=\"col\">";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Privileges"), "html", null, true);
            yield "</th>
                <th scope=\"col\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Grant"), "html", null, true);
            yield "</th>
                <th scope=\"col\" colspan=\"2\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Action"), "html", null, true);
            yield "</th>
              </tr>
            </thead>

            <tbody>
              ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["privileges"]) || array_key_exists("privileges", $context) ? $context["privileges"] : (function () { throw new RuntimeError('Variable "privileges" does not exist.', 27, $this->source); })()));
            $context['_iterated'] = false;
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["privilege"]) {
                // line 28
                yield "                ";
                $context["privileges_amount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "privileges", [], "any", false, false, false, 28));
                // line 29
                yield "                <tr>
                  <td";
                // line 30
                if (((isset($context["privileges_amount"]) || array_key_exists("privileges_amount", $context) ? $context["privileges_amount"] : (function () { throw new RuntimeError('Variable "privileges_amount" does not exist.', 30, $this->source); })()) > 1)) {
                    yield " class=\"align-middle\" rowspan=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["privileges_amount"]) || array_key_exists("privileges_amount", $context) ? $context["privileges_amount"] : (function () { throw new RuntimeError('Variable "privileges_amount" does not exist.', 30, $this->source); })()), "html", null, true);
                    yield "\"";
                }
                yield ">
                    <input type=\"checkbox\" class=\"checkall\" name=\"selected_usr[]\" id=\"checkbox_sel_users_";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 31), "html", null, true);
                yield "\" value=\"";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "user", [], "any", false, false, false, 32) . "&amp;#27;") . CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "host", [], "any", false, false, false, 32)), "html", null, true);
                yield "\">
                  </td>
                  <td";
                // line 34
                if (((isset($context["privileges_amount"]) || array_key_exists("privileges_amount", $context) ? $context["privileges_amount"] : (function () { throw new RuntimeError('Variable "privileges_amount" does not exist.', 34, $this->source); })()) > 1)) {
                    yield " class=\"align-middle\" rowspan=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["privileges_amount"]) || array_key_exists("privileges_amount", $context) ? $context["privileges_amount"] : (function () { throw new RuntimeError('Variable "privileges_amount" does not exist.', 34, $this->source); })()), "html", null, true);
                    yield "\"";
                }
                yield ">
                    ";
                // line 35
                if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "user", [], "any", false, false, false, 35))) {
                    // line 36
                    yield "                      <span class=\"text-danger\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Any"), "html", null, true);
                    yield "</span>
                    ";
                } else {
                    // line 38
                    yield "                      ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "user", [], "any", false, false, false, 38), "html", null, true);
                    yield "
                    ";
                }
                // line 40
                yield "                  </td>
                  <td";
                // line 41
                if (((isset($context["privileges_amount"]) || array_key_exists("privileges_amount", $context) ? $context["privileges_amount"] : (function () { throw new RuntimeError('Variable "privileges_amount" does not exist.', 41, $this->source); })()) > 1)) {
                    yield " class=\"align-middle\" rowspan=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["privileges_amount"]) || array_key_exists("privileges_amount", $context) ? $context["privileges_amount"] : (function () { throw new RuntimeError('Variable "privileges_amount" does not exist.', 41, $this->source); })()), "html", null, true);
                    yield "\"";
                }
                yield ">
                    ";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "host", [], "any", false, false, false, 42), "html", null, true);
                yield "
                  </td>
                  ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "privileges", [], "any", false, false, false, 44));
                foreach ($context['_seq'] as $context["_key"] => $context["priv"]) {
                    // line 45
                    yield "                    <td>
                      ";
                    // line 46
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "type", [], "any", false, false, false, 46) == "g")) {
                        // line 47
                        yield "                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("global"), "html", null, true);
                        yield "
                      ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 48
$context["priv"], "type", [], "any", false, false, false, 48) == "d")) {
                        // line 49
                        yield "                        ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "database", [], "any", false, false, false, 49) == Twig\Extension\CoreExtension::replace((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 49, $this->source); })()), ["_" => "\\_", "%" => "\\%"]))) {
                            // line 50
                            yield "                          ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("database-specific"), "html", null, true);
                            yield "
                        ";
                        } else {
                            // line 52
                            yield "                          ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("wildcard"), "html", null, true);
                            yield ": <code>";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "database", [], "any", false, false, false, 52), "html", null, true);
                            yield "</code>
                        ";
                        }
                        // line 54
                        yield "                      ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "type", [], "any", false, false, false, 54) == "r")) {
                        // line 55
                        yield "                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("routine"), "html", null, true);
                        yield "
                      ";
                    }
                    // line 57
                    yield "                    </td>
                    <td>
                      <code>
                        ";
                    // line 60
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "type", [], "any", false, false, false, 60) == "r")) {
                        // line 61
                        yield "                          ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "routine", [], "any", false, false, false, 61), "html", null, true);
                        yield "
                          (";
                        // line 62
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "privileges", [], "any", false, false, false, 62), ", ")), "html", null, true);
                        yield ")
                        ";
                    } else {
                        // line 64
                        yield "                          ";
                        yield Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "privileges", [], "any", false, false, false, 64), ", ");
                        yield "
                        ";
                    }
                    // line 66
                    yield "                      </code>
                    </td>
                    <td>
                      ";
                    // line 69
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "has_grant", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Yes"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No"), "html", null, true)));
                    yield "
                    </td>
                    <td>
                      ";
                    // line 72
                    if ((($tmp = (isset($context["is_grantuser"]) || array_key_exists("is_grantuser", $context) ? $context["is_grantuser"] : (function () { throw new RuntimeError('Variable "is_grantuser" does not exist.', 72, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 73
                        yield "                        <a class=\"edit_user_anchor\" href=\"";
                        yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["username" => CoreExtension::getAttribute($this->env, $this->source,                         // line 74
$context["privilege"], "user", [], "any", false, false, false, 74), "hostname" => CoreExtension::getAttribute($this->env, $this->source,                         // line 75
$context["privilege"], "host", [], "any", false, false, false, 75), "dbname" => (((CoreExtension::getAttribute($this->env, $this->source,                         // line 76
$context["priv"], "database", [], "any", false, false, false, 76) != "*")) ? (CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "database", [], "any", false, false, false, 76)) : ((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 76, $this->source); })()))), "tablename" => "", "routinename" => (((CoreExtension::getAttribute($this->env, $this->source,                         // line 78
$context["priv"], "routine", [], "any", true, true, false, 78) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "routine", [], "any", false, false, false, 78)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "routine", [], "any", false, false, false, 78)) : (""))]);
                        // line 79
                        yield "\">
                          ";
                        // line 80
                        yield PhpMyAdmin\Html\Generator::getIcon("b_usredit", \_gettext("Edit privileges"));
                        yield "
                        </a>
                      ";
                    }
                    // line 83
                    yield "                    </td>
                    <td class=\"text-center\">
                      <a class=\"export_user_anchor ajax\" href=\"";
                    // line 85
                    yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["username" => CoreExtension::getAttribute($this->env, $this->source,                     // line 86
$context["privilege"], "user", [], "any", false, false, false, 86), "hostname" => CoreExtension::getAttribute($this->env, $this->source,                     // line 87
$context["privilege"], "host", [], "any", false, false, false, 87), "export" => true, "initial" => ""]);
                    // line 90
                    yield "\">
                        ";
                    // line 91
                    yield PhpMyAdmin\Html\Generator::getIcon("b_tblexport", \_gettext("Export"));
                    yield "
                      </a>
                    </td>
                  </tr>
                  ";
                    // line 95
                    if (((isset($context["privileges_amount"]) || array_key_exists("privileges_amount", $context) ? $context["privileges_amount"] : (function () { throw new RuntimeError('Variable "privileges_amount" does not exist.', 95, $this->source); })()) > 1)) {
                        // line 96
                        yield "                    <tr class=\"noclick\">
                  ";
                    }
                    // line 98
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['priv'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                yield "              ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 100
                yield "                <tr>
                  <td colspan=\"7\">
                    ";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No user found."), "html", null, true);
                yield "
                  </td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['privilege'], $context['_parent'], $context['_iterated'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            yield "            </tbody>
          </table>
        </div>

        <div>
          ";
            // line 111
            yield PhpMyAdmin\Html\Generator::getImage("select_all_arrow", \_gettext("With selected:"), ["dir" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["pma"]) || array_key_exists("pma", $context) ? $context["pma"] : (function () { throw new RuntimeError('Variable "pma" does not exist.', 111, $this->source); })()), "text_dir", [], "any", false, false, false, 111), "width" => "38", "height" => "22"]);
            yield "
          <input type=\"checkbox\" id=\"usersForm_checkall\" class=\"checkall_box\" title=\"";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check all"), "html", null, true);
            yield "\">
          <label for=\"usersForm_checkall\">";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check all"), "html", null, true);
            yield "</label>
          <em class=\"with-selected\">";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("With selected:"), "html", null, true);
            yield "</em>
          <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"export\" title=\"";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Export"), "html", null, true);
            yield "\">
            ";
            // line 116
            yield PhpMyAdmin\Html\Generator::getIcon("b_tblexport", \_gettext("Export"));
            yield "
          </button>
        </div>
      </div>
    </form>
  ";
        } else {
            // line 122
            yield "    ";
            yield PhpMyAdmin\Twig\MessageExtension::getError(\_gettext("Not enough privilege to view users."));
            yield "
  ";
        }
        // line 124
        yield "
  ";
        // line 125
        if ((($tmp = (isset($context["is_createuser"]) || array_key_exists("is_createuser", $context) ? $context["is_createuser"] : (function () { throw new RuntimeError('Variable "is_createuser" does not exist.', 125, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 126
            yield "    <div>
      <a class=\"btn btn-primary\" id=\"add_user_anchor\" href=\"";
            // line 127
            yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["adduser" => true, "dbname" =>             // line 129
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 129, $this->source); })())]);
            // line 130
            yield "\">
        ";
            // line 131
            yield PhpMyAdmin\Html\Generator::getIcon("b_usradd", \_gettext("Add user account"));
            yield "
      </a>
    </div>
  ";
        }
        // line 135
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/privileges/index.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  395 => 135,  388 => 131,  385 => 130,  383 => 129,  382 => 127,  379 => 126,  377 => 125,  374 => 124,  368 => 122,  359 => 116,  355 => 115,  351 => 114,  347 => 113,  343 => 112,  339 => 111,  332 => 106,  322 => 102,  318 => 100,  305 => 99,  299 => 98,  295 => 96,  293 => 95,  286 => 91,  283 => 90,  281 => 87,  280 => 86,  279 => 85,  275 => 83,  269 => 80,  266 => 79,  264 => 78,  263 => 76,  262 => 75,  261 => 74,  259 => 73,  257 => 72,  251 => 69,  246 => 66,  240 => 64,  235 => 62,  230 => 61,  228 => 60,  223 => 57,  217 => 55,  214 => 54,  206 => 52,  200 => 50,  197 => 49,  195 => 48,  190 => 47,  188 => 46,  185 => 45,  181 => 44,  176 => 42,  168 => 41,  165 => 40,  159 => 38,  153 => 36,  151 => 35,  143 => 34,  138 => 32,  135 => 31,  127 => 30,  124 => 29,  121 => 28,  103 => 27,  95 => 22,  91 => 21,  87 => 20,  83 => 19,  79 => 18,  75 => 17,  64 => 9,  60 => 8,  54 => 5,  50 => 4,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container\">
  {% if is_superuser %}
    <h2>
      {{ get_icon('b_usrcheck') }}
      {{ t('Users having access to \"%s\"')|format('<a href=\"' ~ database_url ~ get_common({'db': db}, '&') ~ '\">' ~ db|escape('html') ~ '</a>')|raw }}
    </h2>

    <form id=\"usersForm\" action=\"{{ url('/server/privileges') }}\" class=\"card mb-3\">
      {{ get_hidden_inputs(db) }}

      <div class=\"card-body\">
        <div class=\"table-responsive jsresponsive\">
          <table class=\"table table-striped table-hover w-auto\">
            <thead>
              <tr>
                <th></th>
                <th scope=\"col\">{{ t('User name') }}</th>
                <th scope=\"col\">{{ t('Host name') }}</th>
                <th scope=\"col\">{{ t('Type') }}</th>
                <th scope=\"col\">{{ t('Privileges') }}</th>
                <th scope=\"col\">{{ t('Grant') }}</th>
                <th scope=\"col\" colspan=\"2\">{{ t('Action') }}</th>
              </tr>
            </thead>

            <tbody>
              {% for privilege in privileges %}
                {% set privileges_amount = privilege.privileges|length %}
                <tr>
                  <td{% if privileges_amount > 1 %} class=\"align-middle\" rowspan=\"{{ privileges_amount }}\"{% endif %}>
                    <input type=\"checkbox\" class=\"checkall\" name=\"selected_usr[]\" id=\"checkbox_sel_users_{{ loop.index0 }}\" value=\"
                        {{- privilege.user ~ '&amp;#27;' ~ privilege.host }}\">
                  </td>
                  <td{% if privileges_amount > 1 %} class=\"align-middle\" rowspan=\"{{ privileges_amount }}\"{% endif %}>
                    {% if privilege.user is empty %}
                      <span class=\"text-danger\">{{ t('Any') }}</span>
                    {% else %}
                      {{ privilege.user }}
                    {% endif %}
                  </td>
                  <td{% if privileges_amount > 1 %} class=\"align-middle\" rowspan=\"{{ privileges_amount }}\"{% endif %}>
                    {{ privilege.host }}
                  </td>
                  {% for priv in privilege.privileges %}
                    <td>
                      {% if priv.type == 'g' %}
                        {{ t('global') }}
                      {% elseif priv.type == 'd' %}
                        {% if priv.database == db|replace({'_': '\\\\_', '%': '\\\\%'}) %}
                          {{ t('database-specific') }}
                        {% else %}
                          {{ t('wildcard') }}: <code>{{ priv.database }}</code>
                        {% endif %}
                      {% elseif priv.type == 'r' %}
                        {{ t('routine') }}
                      {% endif %}
                    </td>
                    <td>
                      <code>
                        {% if priv.type == 'r' %}
                          {{ priv.routine }}
                          ({{ priv.privileges|join(', ')|upper }})
                        {% else %}
                          {{ priv.privileges|join(', ')|raw }}
                        {% endif %}
                      </code>
                    </td>
                    <td>
                      {{ priv.has_grant ? t('Yes') : t('No') }}
                    </td>
                    <td>
                      {% if is_grantuser %}
                        <a class=\"edit_user_anchor\" href=\"{{ url('/server/privileges', {
                          'username': privilege.user,
                          'hostname': privilege.host,
                          'dbname': priv.database != '*' ? priv.database : db,
                          'tablename': '',
                          'routinename': priv.routine ?? ''
                        }) }}\">
                          {{ get_icon('b_usredit', t('Edit privileges')) }}
                        </a>
                      {% endif %}
                    </td>
                    <td class=\"text-center\">
                      <a class=\"export_user_anchor ajax\" href=\"{{ url('/server/privileges', {
                        'username': privilege.user,
                        'hostname': privilege.host,
                        'export': true,
                        'initial': ''
                      }) }}\">
                        {{ get_icon('b_tblexport', t('Export')) }}
                      </a>
                    </td>
                  </tr>
                  {% if privileges_amount > 1 %}
                    <tr class=\"noclick\">
                  {% endif %}
                {% endfor %}
              {% else %}
                <tr>
                  <td colspan=\"7\">
                    {{ t('No user found.') }}
                  </td>
                </tr>
              {% endfor %}
            </tbody>
          </table>
        </div>

        <div>
          {{ get_image('select_all_arrow', t('With selected:'), {'dir': pma.text_dir, 'width': '38', 'height': '22'}) }}
          <input type=\"checkbox\" id=\"usersForm_checkall\" class=\"checkall_box\" title=\"{{ t('Check all') }}\">
          <label for=\"usersForm_checkall\">{{ t('Check all') }}</label>
          <em class=\"with-selected\">{{ t('With selected:') }}</em>
          <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"export\" title=\"{{ t('Export') }}\">
            {{ get_icon('b_tblexport', t('Export')) }}
          </button>
        </div>
      </div>
    </form>
  {% else %}
    {{ t('Not enough privilege to view users.')|error }}
  {% endif %}

  {% if is_createuser %}
    <div>
      <a class=\"btn btn-primary\" id=\"add_user_anchor\" href=\"{{ url('/server/privileges', {
        'adduser': true,
        'dbname': db
      }) }}\">
        {{ get_icon('b_usradd', t('Add user account')) }}
      </a>
    </div>
  {% endif %}
</div>
", "database/privileges/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/privileges/index.twig");
    }
}

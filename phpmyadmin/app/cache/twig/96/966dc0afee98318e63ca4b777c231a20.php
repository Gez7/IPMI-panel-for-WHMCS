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

/* table/privileges/index.twig */
class __TwigTemplate_20097c09fc87994b1bb730b9e131d09c extends Template
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
            yield Twig\Extension\CoreExtension::sprintf(\_gettext("Users having access to \"%s\""), ((((((("<a href=\"" . (isset($context["table_url"]) || array_key_exists("table_url", $context) ? $context["table_url"] : (function () { throw new RuntimeError('Variable "table_url" does not exist.', 5, $this->source); })())) . PhpMyAdmin\Url::getCommon(["db" =>             // line 6
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 6, $this->source); })()), "table" =>             // line 7
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 7, $this->source); })())], "&")) . "\">") . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(            // line 8
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 8, $this->source); })()), "html")) . ".") . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 8, $this->source); })()), "html")) . "</a>"));
            yield "
    </h2>

    <form id=\"usersForm\" action=\"";
            // line 11
            yield PhpMyAdmin\Url::getFromRoute("/server/privileges");
            yield "\" class=\"card mb-3\">
      ";
            // line 12
            yield PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 12, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 12, $this->source); })()));
            yield "
      <div class=\"card-body\">
        <div class=\"table-responsive-md jsresponsive\">
          <table class=\"table table-striped table-hover w-auto\">
            <thead>
              <tr>
                <th></th>
                <th>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("User name"), "html", null, true);
            yield "</th>
                <th>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Host name"), "html", null, true);
            yield "</th>
                <th>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Type"), "html", null, true);
            yield "</th>
                <th>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Privileges"), "html", null, true);
            yield "</th>
                <th>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Grant"), "html", null, true);
            yield "</th>
                <th colspan=\"2\">";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Action"), "html", null, true);
            yield "</th>
              </tr>
            </thead>

            <tbody>
              ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["privileges"]) || array_key_exists("privileges", $context) ? $context["privileges"] : (function () { throw new RuntimeError('Variable "privileges" does not exist.', 29, $this->source); })()));
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
                // line 30
                yield "                ";
                $context["privileges_amount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "privileges", [], "any", false, false, false, 30));
                // line 31
                yield "                <tr>
                  <td";
                // line 32
                if (((isset($context["privileges_amount"]) || array_key_exists("privileges_amount", $context) ? $context["privileges_amount"] : (function () { throw new RuntimeError('Variable "privileges_amount" does not exist.', 32, $this->source); })()) > 1)) {
                    yield " class=\"align-middle\" rowspan=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["privileges_amount"]) || array_key_exists("privileges_amount", $context) ? $context["privileges_amount"] : (function () { throw new RuntimeError('Variable "privileges_amount" does not exist.', 32, $this->source); })()), "html", null, true);
                    yield "\"";
                }
                yield ">
                    <input type=\"checkbox\" class=\"checkall\" name=\"selected_usr[]\" id=\"checkbox_sel_users_";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 33), "html", null, true);
                yield "\" value=\"";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "user", [], "any", false, false, false, 34) . "&amp;#27;") . CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "host", [], "any", false, false, false, 34)), "html", null, true);
                yield "\">
                  </td>
                  <td";
                // line 36
                if (((isset($context["privileges_amount"]) || array_key_exists("privileges_amount", $context) ? $context["privileges_amount"] : (function () { throw new RuntimeError('Variable "privileges_amount" does not exist.', 36, $this->source); })()) > 1)) {
                    yield " class=\"align-middle\" rowspan=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["privileges_amount"]) || array_key_exists("privileges_amount", $context) ? $context["privileges_amount"] : (function () { throw new RuntimeError('Variable "privileges_amount" does not exist.', 36, $this->source); })()), "html", null, true);
                    yield "\"";
                }
                yield ">
                    ";
                // line 37
                if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "user", [], "any", false, false, false, 37))) {
                    // line 38
                    yield "                      <span class=\"text-danger\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Any"), "html", null, true);
                    yield "</span>
                    ";
                } else {
                    // line 40
                    yield "                      ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "user", [], "any", false, false, false, 40), "html", null, true);
                    yield "
                    ";
                }
                // line 42
                yield "                  </td>
                  <td";
                // line 43
                if (((isset($context["privileges_amount"]) || array_key_exists("privileges_amount", $context) ? $context["privileges_amount"] : (function () { throw new RuntimeError('Variable "privileges_amount" does not exist.', 43, $this->source); })()) > 1)) {
                    yield " class=\"align-middle\" rowspan=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["privileges_amount"]) || array_key_exists("privileges_amount", $context) ? $context["privileges_amount"] : (function () { throw new RuntimeError('Variable "privileges_amount" does not exist.', 43, $this->source); })()), "html", null, true);
                    yield "\"";
                }
                yield ">
                    ";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "host", [], "any", false, false, false, 44), "html", null, true);
                yield "
                  </td>
                  ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "privileges", [], "any", false, false, false, 46));
                foreach ($context['_seq'] as $context["_key"] => $context["priv"]) {
                    // line 47
                    yield "                    <td>
                      ";
                    // line 48
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "type", [], "any", false, false, false, 48) == "g")) {
                        // line 49
                        yield "                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("global"), "html", null, true);
                        yield "
                      ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 50
$context["priv"], "type", [], "any", false, false, false, 50) == "d")) {
                        // line 51
                        yield "                        ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "database", [], "any", false, false, false, 51) == Twig\Extension\CoreExtension::replace((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 51, $this->source); })()), ["_" => "\\_", "%" => "\\%"]))) {
                            // line 52
                            yield "                          ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("database-specific"), "html", null, true);
                            yield "
                        ";
                        } else {
                            // line 54
                            yield "                          ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("wildcard"), "html", null, true);
                            yield ": <code>";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "database", [], "any", false, false, false, 54), "html", null, true);
                            yield "</code>
                        ";
                        }
                        // line 56
                        yield "                      ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "type", [], "any", false, false, false, 56) == "t")) {
                        // line 57
                        yield "                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("table-specific"), "html", null, true);
                        yield "
                      ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 58
$context["priv"], "type", [], "any", false, false, false, 58) == "r")) {
                        // line 59
                        yield "                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("routine"), "html", null, true);
                        yield "
                      ";
                    }
                    // line 61
                    yield "                    </td>
                    <td>
                      <code>
                        ";
                    // line 64
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "type", [], "any", false, false, false, 64) == "r")) {
                        // line 65
                        yield "                          ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "routine", [], "any", false, false, false, 65), "html", null, true);
                        yield "
                          (";
                        // line 66
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "privileges", [], "any", false, false, false, 66), ", ")), "html", null, true);
                        yield ")
                        ";
                    } else {
                        // line 68
                        yield "                          ";
                        yield Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "privileges", [], "any", false, false, false, 68), ", ");
                        yield "
                        ";
                    }
                    // line 70
                    yield "                      </code>
                    </td>
                    <td>
                      ";
                    // line 73
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "has_grant", [], "any", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Yes"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No"), "html", null, true)));
                    yield "
                    </td>
                    <td>
                      ";
                    // line 76
                    if ((($tmp = (isset($context["is_grantuser"]) || array_key_exists("is_grantuser", $context) ? $context["is_grantuser"] : (function () { throw new RuntimeError('Variable "is_grantuser" does not exist.', 76, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 77
                        yield "                        <a class=\"edit_user_anchor\" href=\"";
                        yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["username" => CoreExtension::getAttribute($this->env, $this->source,                         // line 78
$context["privilege"], "user", [], "any", false, false, false, 78), "hostname" => CoreExtension::getAttribute($this->env, $this->source,                         // line 79
$context["privilege"], "host", [], "any", false, false, false, 79), "dbname" => (((CoreExtension::getAttribute($this->env, $this->source,                         // line 80
$context["priv"], "database", [], "any", false, false, false, 80) != "*")) ? (CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "database", [], "any", false, false, false, 80)) : ((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 80, $this->source); })()))), "tablename" => (((CoreExtension::getAttribute($this->env, $this->source,                         // line 81
$context["priv"], "table", [], "any", true, true, false, 81) && (CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "table", [], "any", false, false, false, 81) != "*"))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "table", [], "any", false, false, false, 81)) : ((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 81, $this->source); })()))), "routinename" => (((CoreExtension::getAttribute($this->env, $this->source,                         // line 82
$context["priv"], "routine", [], "any", true, true, false, 82) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "routine", [], "any", false, false, false, 82)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "routine", [], "any", false, false, false, 82)) : (""))]);
                        // line 83
                        yield "\">
                          ";
                        // line 84
                        yield PhpMyAdmin\Html\Generator::getIcon("b_usredit", \_gettext("Edit privileges"));
                        yield "
                        </a>
                      ";
                    }
                    // line 87
                    yield "                    </td>
                    <td class=\"text-center\">
                      <a class=\"export_user_anchor ajax\" href=\"";
                    // line 89
                    yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["username" => CoreExtension::getAttribute($this->env, $this->source,                     // line 90
$context["privilege"], "user", [], "any", false, false, false, 90), "hostname" => CoreExtension::getAttribute($this->env, $this->source,                     // line 91
$context["privilege"], "host", [], "any", false, false, false, 91), "export" => true, "initial" => ""]);
                    // line 94
                    yield "\">
                        ";
                    // line 95
                    yield PhpMyAdmin\Html\Generator::getIcon("b_tblexport", \_gettext("Export"));
                    yield "
                      </a>
                    </td>
                  </tr>
                  ";
                    // line 99
                    if (((isset($context["privileges_amount"]) || array_key_exists("privileges_amount", $context) ? $context["privileges_amount"] : (function () { throw new RuntimeError('Variable "privileges_amount" does not exist.', 99, $this->source); })()) > 1)) {
                        // line 100
                        yield "                    <tr class=\"noclick\">
                  ";
                    }
                    // line 102
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['priv'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
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
                // line 104
                yield "                <tr>
                  <td colspan=\"7\">
                    ";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No user found."), "html", null, true);
                yield "
                  </td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['privilege'], $context['_parent'], $context['_iterated'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            yield "            </tbody>
          </table>
        </div>

        <div>
          ";
            // line 115
            yield PhpMyAdmin\Html\Generator::getImage("select_all_arrow", \_gettext("With selected:"), ["dir" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["pma"]) || array_key_exists("pma", $context) ? $context["pma"] : (function () { throw new RuntimeError('Variable "pma" does not exist.', 115, $this->source); })()), "text_dir", [], "any", false, false, false, 115), "width" => "38", "height" => "22"]);
            yield "
          <input type=\"checkbox\" id=\"usersForm_checkall\" class=\"checkall_box\" title=\"";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check all"), "html", null, true);
            yield "\">
          <label for=\"usersForm_checkall\">";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check all"), "html", null, true);
            yield "</label>
          <em class=\"with-selected\">";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("With selected:"), "html", null, true);
            yield "</em>
          <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"export\" title=\"";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Export"), "html", null, true);
            yield "\">
            ";
            // line 120
            yield PhpMyAdmin\Html\Generator::getIcon("b_tblexport", \_gettext("Export"));
            yield "
          </button>
        </div>
      </div>
    </form>
  ";
        } else {
            // line 126
            yield "    ";
            yield PhpMyAdmin\Twig\MessageExtension::getError(\_gettext("Not enough privilege to view users."));
            yield "
  ";
        }
        // line 128
        yield "
  ";
        // line 129
        if ((($tmp = (isset($context["is_createuser"]) || array_key_exists("is_createuser", $context) ? $context["is_createuser"] : (function () { throw new RuntimeError('Variable "is_createuser" does not exist.', 129, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 130
            yield "    <div>
      <a class=\"btn btn-primary\" id=\"add_user_anchor\" href=\"";
            // line 131
            yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["adduser" => true, "dbname" =>             // line 133
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 133, $this->source); })()), "tablename" =>             // line 134
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 134, $this->source); })())]);
            // line 135
            yield "\">
        ";
            // line 136
            yield PhpMyAdmin\Html\Generator::getIcon("b_usradd", \_gettext("Add user account"));
            yield "
      </a>
    </div>
  ";
        }
        // line 140
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/privileges/index.twig";
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
        return array (  406 => 140,  399 => 136,  396 => 135,  394 => 134,  393 => 133,  392 => 131,  389 => 130,  387 => 129,  384 => 128,  378 => 126,  369 => 120,  365 => 119,  361 => 118,  357 => 117,  353 => 116,  349 => 115,  342 => 110,  332 => 106,  328 => 104,  315 => 103,  309 => 102,  305 => 100,  303 => 99,  296 => 95,  293 => 94,  291 => 91,  290 => 90,  289 => 89,  285 => 87,  279 => 84,  276 => 83,  274 => 82,  273 => 81,  272 => 80,  271 => 79,  270 => 78,  268 => 77,  266 => 76,  260 => 73,  255 => 70,  249 => 68,  244 => 66,  239 => 65,  237 => 64,  232 => 61,  226 => 59,  224 => 58,  219 => 57,  216 => 56,  208 => 54,  202 => 52,  199 => 51,  197 => 50,  192 => 49,  190 => 48,  187 => 47,  183 => 46,  178 => 44,  170 => 43,  167 => 42,  161 => 40,  155 => 38,  153 => 37,  145 => 36,  140 => 34,  137 => 33,  129 => 32,  126 => 31,  123 => 30,  105 => 29,  97 => 24,  93 => 23,  89 => 22,  85 => 21,  81 => 20,  77 => 19,  67 => 12,  63 => 11,  57 => 8,  56 => 7,  55 => 6,  54 => 5,  50 => 4,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container\">
  {% if is_superuser %}
    <h2>
      {{ get_icon('b_usrcheck') }}
      {{ t('Users having access to \"%s\"')|format('<a href=\"' ~ table_url ~ get_common({
        'db': db,
        'table': table
      }, '&') ~ '\">' ~ db|escape('html') ~ '.' ~ table|escape('html') ~ '</a>')|raw }}
    </h2>

    <form id=\"usersForm\" action=\"{{ url('/server/privileges') }}\" class=\"card mb-3\">
      {{ get_hidden_inputs(db, table) }}
      <div class=\"card-body\">
        <div class=\"table-responsive-md jsresponsive\">
          <table class=\"table table-striped table-hover w-auto\">
            <thead>
              <tr>
                <th></th>
                <th>{{ t('User name') }}</th>
                <th>{{ t('Host name') }}</th>
                <th>{{ t('Type') }}</th>
                <th>{{ t('Privileges') }}</th>
                <th>{{ t('Grant') }}</th>
                <th colspan=\"2\">{{ t('Action') }}</th>
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
                      {% elseif priv.type == 't' %}
                        {{ t('table-specific') }}
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
                          'tablename': priv.table is defined and priv.table != '*' ? priv.table : table,
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
        'dbname': db,
        'tablename': table
      }) }}\">
        {{ get_icon('b_usradd', t('Add user account')) }}
      </a>
    </div>
  {% endif %}
</div>
", "table/privileges/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/privileges/index.twig");
    }
}

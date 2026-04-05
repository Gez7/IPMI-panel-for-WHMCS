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

/* display/results/table.twig */
class __TwigTemplate_6bc3286ca1c1ed2443b718bfe9a7f38a extends Template
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
        $context["navigation_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "  ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 2, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 3
                yield "    <table class=\"navigation d-print-none\">
      <tr>
        <td class=\"navigation_separator\"></td>

        ";
                // line 7
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 7, $this->source); })()), "pos", [], "any", false, false, false, 7) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 7, $this->source); })()), "is_showing_all", [], "any", false, false, false, 7))) {
                    // line 8
                    yield "          <td>
            <form action=\"";
                    // line 9
                    yield PhpMyAdmin\Url::getFromRoute("/sql");
                    yield "\" method=\"post\">
              ";
                    // line 10
                    yield PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 10, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 10, $this->source); })()));
                    yield "
              <input type=\"hidden\" name=\"sql_query\" value=\"";
                    // line 11
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sql_query"]) || array_key_exists("sql_query", $context) ? $context["sql_query"] : (function () { throw new RuntimeError('Variable "sql_query" does not exist.', 11, $this->source); })()), "html", null, true);
                    yield "\">
              <input type=\"hidden\" name=\"pos\" value=\"0\">
              <input type=\"hidden\" name=\"is_browse_distinct\" value=\"";
                    // line 13
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["is_browse_distinct"]) || array_key_exists("is_browse_distinct", $context) ? $context["is_browse_distinct"] : (function () { throw new RuntimeError('Variable "is_browse_distinct" does not exist.', 13, $this->source); })()), "html", null, true);
                    yield "\">
              <input type=\"hidden\" name=\"goto\" value=\"";
                    // line 14
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["goto"]) || array_key_exists("goto", $context) ? $context["goto"] : (function () { throw new RuntimeError('Variable "goto" does not exist.', 14, $this->source); })()), "html", null, true);
                    yield "\">
              ";
                    // line 15
                    $context["begin_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 16
                        yield (((($tmp = PhpMyAdmin\Util::showIcons("TableNavigationLinksMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("<<") : (""));
                        // line 17
                        if ((($tmp = PhpMyAdmin\Util::showText("TableNavigationLinksMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 18
                            yield "&nbsp;";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("First page", "Begin"), "html", null, true);
                        }
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 21
                    yield "              <input type=\"submit\" name=\"navig\" class=\"btn btn-secondary ajax\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["begin_text"]) || array_key_exists("begin_text", $context) ? $context["begin_text"] : (function () { throw new RuntimeError('Variable "begin_text" does not exist.', 21, $this->source); })()), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("First page", "Begin"), "html", null, true);
                    yield "\">
            </form>
          </td>

          <td>
            <form action=\"";
                    // line 26
                    yield PhpMyAdmin\Url::getFromRoute("/sql");
                    yield "\" method=\"post\">
              ";
                    // line 27
                    yield PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 27, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 27, $this->source); })()));
                    yield "
              <input type=\"hidden\" name=\"sql_query\" value=\"";
                    // line 28
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sql_query"]) || array_key_exists("sql_query", $context) ? $context["sql_query"] : (function () { throw new RuntimeError('Variable "sql_query" does not exist.', 28, $this->source); })()), "html", null, true);
                    yield "\">
              <input type=\"hidden\" name=\"pos\" value=\"";
                    // line 29
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 29, $this->source); })()), "pos_previous", [], "any", false, false, false, 29), "html", null, true);
                    yield "\">
              <input type=\"hidden\" name=\"is_browse_distinct\" value=\"";
                    // line 30
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["is_browse_distinct"]) || array_key_exists("is_browse_distinct", $context) ? $context["is_browse_distinct"] : (function () { throw new RuntimeError('Variable "is_browse_distinct" does not exist.', 30, $this->source); })()), "html", null, true);
                    yield "\">
              <input type=\"hidden\" name=\"goto\" value=\"";
                    // line 31
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["goto"]) || array_key_exists("goto", $context) ? $context["goto"] : (function () { throw new RuntimeError('Variable "goto" does not exist.', 31, $this->source); })()), "html", null, true);
                    yield "\">
              ";
                    // line 32
                    $context["previous_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 33
                        yield (((($tmp = PhpMyAdmin\Util::showIcons("TableNavigationLinksMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("<") : (""));
                        // line 34
                        if ((($tmp = PhpMyAdmin\Util::showText("TableNavigationLinksMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 35
                            yield "&nbsp;";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Previous page", "Previous"), "html", null, true);
                        }
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 38
                    yield "              <input type=\"submit\" name=\"navig\" class=\"btn btn-secondary ajax\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["previous_text"]) || array_key_exists("previous_text", $context) ? $context["previous_text"] : (function () { throw new RuntimeError('Variable "previous_text" does not exist.', 38, $this->source); })()), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Previous page", "Previous"), "html", null, true);
                    yield "\">
            </form>
          </td>
        ";
                }
                // line 42
                yield "
        ";
                // line 43
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 43, $this->source); })()), "page_selector", [], "any", false, false, false, 43);
                yield "

        ";
                // line 45
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 45, $this->source); })()), "is_last_page", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 46
                    yield "          <td>
            <form action=\"";
                    // line 47
                    yield PhpMyAdmin\Url::getFromRoute("/sql");
                    yield "\" method=\"post\">
              ";
                    // line 48
                    yield PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 48, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 48, $this->source); })()));
                    yield "
              <input type=\"hidden\" name=\"sql_query\" value=\"";
                    // line 49
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sql_query"]) || array_key_exists("sql_query", $context) ? $context["sql_query"] : (function () { throw new RuntimeError('Variable "sql_query" does not exist.', 49, $this->source); })()), "html", null, true);
                    yield "\">
              <input type=\"hidden\" name=\"pos\" value=\"";
                    // line 50
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 50, $this->source); })()), "pos_next", [], "any", false, false, false, 50), "html", null, true);
                    yield "\">
              <input type=\"hidden\" name=\"is_browse_distinct\" value=\"";
                    // line 51
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["is_browse_distinct"]) || array_key_exists("is_browse_distinct", $context) ? $context["is_browse_distinct"] : (function () { throw new RuntimeError('Variable "is_browse_distinct" does not exist.', 51, $this->source); })()), "html", null, true);
                    yield "\">
              <input type=\"hidden\" name=\"goto\" value=\"";
                    // line 52
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["goto"]) || array_key_exists("goto", $context) ? $context["goto"] : (function () { throw new RuntimeError('Variable "goto" does not exist.', 52, $this->source); })()), "html", null, true);
                    yield "\">
              ";
                    // line 53
                    $context["next_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 54
                        if ((($tmp = PhpMyAdmin\Util::showText("TableNavigationLinksMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 55
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Next page", "Next"), "html", null, true);
                            yield "&nbsp;";
                        }
                        // line 57
                        yield (((($tmp = PhpMyAdmin\Util::showIcons("TableNavigationLinksMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (">") : (""));
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 59
                    yield "              <input type=\"submit\" name=\"navig\" class=\"btn btn-secondary ajax\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["next_text"]) || array_key_exists("next_text", $context) ? $context["next_text"] : (function () { throw new RuntimeError('Variable "next_text" does not exist.', 59, $this->source); })()), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Next page", "Next"), "html", null, true);
                    yield "\">
            </form>
          </td>

          ";
                    // line 63
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 63, $this->source); })()), "is_last_page_known", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 64
                        yield "          <td>
            <form action=\"";
                        // line 65
                        yield PhpMyAdmin\Url::getFromRoute("/sql");
                        yield "\" method=\"post\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 65, $this->source); })()), "onsubmit", [], "any", false, false, false, 65);
                        yield ">
              ";
                        // line 66
                        yield PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 66, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 66, $this->source); })()));
                        yield "
              <input type=\"hidden\" name=\"sql_query\" value=\"";
                        // line 67
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sql_query"]) || array_key_exists("sql_query", $context) ? $context["sql_query"] : (function () { throw new RuntimeError('Variable "sql_query" does not exist.', 67, $this->source); })()), "html", null, true);
                        yield "\">
              <input type=\"hidden\" name=\"pos\" value=\"";
                        // line 68
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 68, $this->source); })()), "pos_last", [], "any", false, false, false, 68), "html", null, true);
                        yield "\">
              <input type=\"hidden\" name=\"is_browse_distinct\" value=\"";
                        // line 69
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["is_browse_distinct"]) || array_key_exists("is_browse_distinct", $context) ? $context["is_browse_distinct"] : (function () { throw new RuntimeError('Variable "is_browse_distinct" does not exist.', 69, $this->source); })()), "html", null, true);
                        yield "\">
              <input type=\"hidden\" name=\"goto\" value=\"";
                        // line 70
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["goto"]) || array_key_exists("goto", $context) ? $context["goto"] : (function () { throw new RuntimeError('Variable "goto" does not exist.', 70, $this->source); })()), "html", null, true);
                        yield "\">
              ";
                        // line 71
                        $context["end_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                            // line 72
                            if ((($tmp = PhpMyAdmin\Util::showText("TableNavigationLinksMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 73
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Last page", "End"), "html", null, true);
                                yield "&nbsp;";
                            }
                            // line 75
                            yield (((($tmp = PhpMyAdmin\Util::showIcons("TableNavigationLinksMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (">>") : (""));
                            yield from [];
                        })())) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 77
                        yield "              <input type=\"submit\" name=\"navig\" class=\"btn btn-secondary ajax\" value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["end_text"]) || array_key_exists("end_text", $context) ? $context["end_text"] : (function () { throw new RuntimeError('Variable "end_text" does not exist.', 77, $this->source); })()), "html", null, true);
                        yield "\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Last page", "End"), "html", null, true);
                        yield "\">
            </form>
          </td>
          ";
                    }
                    // line 81
                    yield "        ";
                }
                // line 82
                yield "
        ";
                // line 83
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 83, $this->source); })()), "number_total_page", [], "any", false, false, false, 83) != 1)) {
                    // line 84
                    yield "          <td><div class=\"navigation_separator\">|</div></td>
        ";
                }
                // line 86
                yield "
        ";
                // line 87
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 87, $this->source); })()), "has_show_all", [], "any", false, false, false, 87)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 88
                    yield "          <td>
            <form action=\"";
                    // line 89
                    yield PhpMyAdmin\Url::getFromRoute("/sql");
                    yield "\" method=\"post\">
              ";
                    // line 90
                    yield PhpMyAdmin\Url::getHiddenFields(Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 90, $this->source); })()), "hidden_fields", [], "any", false, false, false, 90), ["session_max_rows" => CoreExtension::getAttribute($this->env, $this->source,                     // line 91
(isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 91, $this->source); })()), "session_max_rows", [], "any", false, false, false, 91), "pos" => "0"]));
                    // line 93
                    yield "
              <input type=\"checkbox\" name=\"navig\" id=\"showAll_";
                    // line 94
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 94, $this->source); })()), "html", null, true);
                    yield "\" class=\"showAllRows\" value=\"all\"";
                    // line 95
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 95, $this->source); })()), "is_showing_all", [], "any", false, false, false, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
                    yield ">
              <label for=\"showAll_";
                    // line 96
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 96, $this->source); })()), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Show all"), "html", null, true);
                    yield "</label>
            </form>
          </td>
          <td><div class=\"navigation_separator\">|</div></td>
        ";
                }
                // line 101
                yield "
        <td>
          <div class=\"save_edited hide\">
            <input class=\"btn btn-link\" type=\"submit\" value=\"";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Save edited data"), "html", null, true);
                yield "\">
            <div class=\"navigation_separator\">|</div>
          </div>
        </td>
        <td>
          <div class=\"restore_column hide\">
            <input class=\"btn btn-link\" type=\"submit\" value=\"";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Restore column order"), "html", null, true);
                yield "\">
            <div class=\"navigation_separator\">|</div>
          </div>
        </td>
        <td class=\"navigation_goto\">
          <form action=\"";
                // line 115
                yield PhpMyAdmin\Url::getFromRoute("/sql");
                yield "\" method=\"post\" class=\"maxRowsForm\">
            ";
                // line 116
                yield PhpMyAdmin\Url::getHiddenFields(Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 116, $this->source); })()), "hidden_fields", [], "any", false, false, false, 116), ["pos" => CoreExtension::getAttribute($this->env, $this->source,                 // line 117
(isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 117, $this->source); })()), "pos", [], "any", false, false, false, 117), "unlim_num_rows" =>                 // line 118
(isset($context["unlim_num_rows"]) || array_key_exists("unlim_num_rows", $context) ? $context["unlim_num_rows"] : (function () { throw new RuntimeError('Variable "unlim_num_rows" does not exist.', 118, $this->source); })())]));
                // line 119
                yield "

            <label for=\"sessionMaxRowsSelect\">";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Number of rows:"), "html", null, true);
                yield "</label>
            <select class=\"autosubmit\" name=\"session_max_rows\" id=\"sessionMaxRowsSelect\">
              ";
                // line 123
                $context["rows_options"] = [25, 50, 100, 250, 500];
                // line 124
                yield "              ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 124, $this->source); })()), "is_showing_all", [], "any", false, false, false, 124)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 125
                    yield "                <option value=\"\" disabled selected>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("All"), "html", null, true);
                    yield "</option>
              ";
                } elseif (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source,                 // line 126
(isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 126, $this->source); })()), "max_rows", [], "any", false, false, false, 126), (isset($context["rows_options"]) || array_key_exists("rows_options", $context) ? $context["rows_options"] : (function () { throw new RuntimeError('Variable "rows_options" does not exist.', 126, $this->source); })()))) {
                    // line 127
                    yield "                ";
                    $context["rows_options"] = Twig\Extension\CoreExtension::sort($this->env, Twig\Extension\CoreExtension::merge((isset($context["rows_options"]) || array_key_exists("rows_options", $context) ? $context["rows_options"] : (function () { throw new RuntimeError('Variable "rows_options" does not exist.', 127, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 127, $this->source); })()), "max_rows", [], "any", false, false, false, 127)]), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return ((isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 127, $this->source); })()) <=> (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 127, $this->source); })())); });
                    // line 128
                    yield "              ";
                }
                // line 129
                yield "              ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rows_options"]) || array_key_exists("rows_options", $context) ? $context["rows_options"] : (function () { throw new RuntimeError('Variable "rows_options" does not exist.', 129, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 130
                    yield "                <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                    yield "\"";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 130, $this->source); })()), "max_rows", [], "any", false, false, false, 130) == $context["option"])) ? (" selected") : (""));
                    yield ">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                    yield "</option>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 132
                yield "            </select>
          </form>
        </td>
        <td class=\"navigation_separator\"></td>
        <td class=\"largescreenonly\">
          <div class=\"row g-1 p-1 align-items-center\">
            <div class=\"col-auto\">
              <label for=\"filterRows\" class=\"col-form-label\">";
                // line 139
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Filter rows:"), "html", null, true);
                yield "</label>
            </div>
            <div class=\"col-auto\">
              <input type=\"text\" id=\"filterRows\" class=\"filter_rows form-control\"
                    placeholder=\"";
                // line 143
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Search this table"), "html", null, true);
                yield "\" data-for=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 143, $this->source); })()), "html", null, true);
                yield "\">
            </div>
          </div>
        </td>
        <td class=\"largescreenonly\">
          ";
                // line 148
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 148, $this->source); })()), "sort_by_key", [], "any", false, false, false, 148))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 149
                    yield "            <form action=\"";
                    yield PhpMyAdmin\Url::getFromRoute("/sql");
                    yield "\" method=\"post\" class=\"d-print-none\">
              ";
                    // line 150
                    yield PhpMyAdmin\Url::getHiddenFields(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 150, $this->source); })()), "sort_by_key", [], "any", false, false, false, 150), "hidden_fields", [], "any", false, false, false, 150));
                    yield "
              ";
                    // line 151
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Sort by key:"), "html", null, true);
                    yield "
              <select name=\"sql_query\" class=\"autosubmit\">
                ";
                    // line 153
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 153, $this->source); })()), "sort_by_key", [], "any", false, false, false, 153), "options", [], "any", false, false, false, 153));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 154
                        yield "                  <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 154), "html", null, true);
                        yield "\"";
                        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "is_selected", [], "any", false, false, false, 154)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected") : (""));
                        yield ">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "content", [], "any", false, false, false, 154), "html", null, true);
                        yield "</option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 156
                    yield "              </select>
            </form>
          ";
                }
                // line 159
                yield "        </td>
        <td class=\"navigation_separator\"></td>
      </tr>
    </table>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 165
        yield "
";
        // line 166
        yield (isset($context["sql_query_message"]) || array_key_exists("sql_query_message", $context) ? $context["sql_query_message"] : (function () { throw new RuntimeError('Variable "sql_query_message" does not exist.', 166, $this->source); })());
        yield "

";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["navigation_html"]) || array_key_exists("navigation_html", $context) ? $context["navigation_html"] : (function () { throw new RuntimeError('Variable "navigation_html" does not exist.', 168, $this->source); })()), "html", null, true);
        yield "

<input class=\"save_cells_at_once\" type=\"hidden\" value=\"";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["save_cells_at_once"]) || array_key_exists("save_cells_at_once", $context) ? $context["save_cells_at_once"] : (function () { throw new RuntimeError('Variable "save_cells_at_once" does not exist.', 170, $this->source); })()), "html", null, true);
        yield "\">
<div class=\"common_hidden_inputs\">
  ";
        // line 172
        yield PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 172, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 172, $this->source); })()));
        yield "
</div>

";
        // line 175
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 175, $this->source); })()), "column_order", [], "any", false, false, false, 175))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 176
            yield "  ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 176, $this->source); })()), "column_order", [], "any", false, false, false, 176), "order", [], "any", false, false, false, 176)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 177
                yield "    <input class=\"col_order\" type=\"hidden\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 177, $this->source); })()), "column_order", [], "any", false, false, false, 177), "order", [], "any", false, false, false, 177), ","), "html", null, true);
                yield "\">
  ";
            }
            // line 179
            yield "  ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 179, $this->source); })()), "column_order", [], "any", false, false, false, 179), "visibility", [], "any", false, false, false, 179)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 180
                yield "    <input class=\"col_visib\" type=\"hidden\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 180, $this->source); })()), "column_order", [], "any", false, false, false, 180), "visibility", [], "any", false, false, false, 180), ","), "html", null, true);
                yield "\">
  ";
            }
            // line 182
            yield "  ";
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 182, $this->source); })()), "column_order", [], "any", false, false, false, 182), "is_view", [], "any", false, false, false, 182)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 183
                yield "    <input class=\"table_create_time\" type=\"hidden\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 183, $this->source); })()), "column_order", [], "any", false, false, false, 183), "table_create_time", [], "any", false, false, false, 183), "html", null, true);
                yield "\">
  ";
            }
        }
        // line 186
        yield "
";
        // line 187
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 187, $this->source); })()), "options", [], "any", false, false, false, 187))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 188
            yield "  <form method=\"post\" action=\"";
            yield PhpMyAdmin\Url::getFromRoute("/sql");
            yield "\" name=\"displayOptionsForm\" class=\"ajax d-print-none\">
    ";
            // line 189
            yield PhpMyAdmin\Url::getHiddenInputs(["db" =>             // line 190
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 190, $this->source); })()), "table" =>             // line 191
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 191, $this->source); })()), "sql_query" =>             // line 192
(isset($context["sql_query"]) || array_key_exists("sql_query", $context) ? $context["sql_query"] : (function () { throw new RuntimeError('Variable "sql_query" does not exist.', 192, $this->source); })()), "goto" =>             // line 193
(isset($context["goto"]) || array_key_exists("goto", $context) ? $context["goto"] : (function () { throw new RuntimeError('Variable "goto" does not exist.', 193, $this->source); })()), "display_options_form" => 1]);
            // line 195
            yield "

    ";
            // line 197
            if (((isset($context["default_sliders_state"]) || array_key_exists("default_sliders_state", $context) ? $context["default_sliders_state"] : (function () { throw new RuntimeError('Variable "default_sliders_state" does not exist.', 197, $this->source); })()) != "disabled")) {
                // line 198
                yield "    <div class=\"mb-3\">
      <button class=\"btn btn-sm btn-secondary\" type=\"button\" id=\"extraOptionsButton\" data-bs-toggle=\"collapse\" data-bs-target=\"#extraOptions\" aria-expanded=\"";
                // line 199
                yield ((((isset($context["default_sliders_state"]) || array_key_exists("default_sliders_state", $context) ? $context["default_sliders_state"] : (function () { throw new RuntimeError('Variable "default_sliders_state" does not exist.', 199, $this->source); })()) == "open")) ? ("true") : ("false"));
                yield "\" aria-controls=\"extraOptions\">
        ";
                // line 200
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Extra options"), "html", null, true);
                yield "
      </button>
    </div>
    <div class=\"collapse mb-3";
                // line 203
                yield ((((isset($context["default_sliders_state"]) || array_key_exists("default_sliders_state", $context) ? $context["default_sliders_state"] : (function () { throw new RuntimeError('Variable "default_sliders_state" does not exist.', 203, $this->source); })()) == "open")) ? (" show") : (""));
                yield "\" id=\"extraOptions\">
    ";
            }
            // line 205
            yield "
      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"row\">
            <fieldset class=\"col-auto\">
              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"pftext\" id=\"partialFulltextRadioP";
            // line 211
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 211, $this->source); })()), "html", null, true);
            yield "\" value=\"P\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 211, $this->source); })()), "options", [], "any", false, false, false, 211), "pftext", [], "any", false, false, false, 211) == "P")) ? (" checked") : (""));
            yield ">
                <label class=\"form-check-label\" for=\"partialFulltextRadioP";
            // line 212
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 212, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Partial texts"), "html", null, true);
            yield "</label>
              </div>
              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"pftext\" id=\"partialFulltextRadioF";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 215, $this->source); })()), "html", null, true);
            yield "\" value=\"F\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 215, $this->source); })()), "options", [], "any", false, false, false, 215), "pftext", [], "any", false, false, false, 215) == "F")) ? (" checked") : (""));
            yield ">
                <label class=\"form-check-label\" for=\"partialFulltextRadioF";
            // line 216
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 216, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Full texts"), "html", null, true);
            yield "</label>
              </div>
            </fieldset>

            ";
            // line 220
            if (((isset($context["relwork"]) || array_key_exists("relwork", $context) ? $context["relwork"] : (function () { throw new RuntimeError('Variable "relwork" does not exist.', 220, $this->source); })()) && (isset($context["displaywork"]) || array_key_exists("displaywork", $context) ? $context["displaywork"] : (function () { throw new RuntimeError('Variable "displaywork" does not exist.', 220, $this->source); })()))) {
                // line 221
                yield "              <fieldset class=\"col-auto\">
                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"radio\" name=\"relational_display\" id=\"relationalDisplayRadioK";
                // line 223
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 223, $this->source); })()), "html", null, true);
                yield "\" value=\"K\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 223, $this->source); })()), "options", [], "any", false, false, false, 223), "relational_display", [], "any", false, false, false, 223) == "K")) ? (" checked") : (""));
                yield ">
                  <label class=\"form-check-label\" for=\"relationalDisplayRadioK";
                // line 224
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 224, $this->source); })()), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Relational key"), "html", null, true);
                yield "</label>
                </div>
                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"radio\" name=\"relational_display\" id=\"relationalDisplayRadioD";
                // line 227
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 227, $this->source); })()), "html", null, true);
                yield "\" value=\"D\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 227, $this->source); })()), "options", [], "any", false, false, false, 227), "relational_display", [], "any", false, false, false, 227) == "D")) ? (" checked") : (""));
                yield ">
                  <label class=\"form-check-label\" for=\"relationalDisplayRadioD";
                // line 228
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 228, $this->source); })()), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Display column for relationships"), "html", null, true);
                yield "</label>
                </div>
              </fieldset>
            ";
            }
            // line 232
            yield "
            <fieldset class=\"col-auto\">
              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"display_binary\" id=\"display_binary_";
            // line 235
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 235, $this->source); })()), "html", null, true);
            yield "\"";
            // line 236
            yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 236, $this->source); })()), "options", [], "any", false, false, false, 236), "display_binary", [], "any", false, false, false, 236))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
            yield ">
                <label class=\"form-check-label\" for=\"display_binary_";
            // line 237
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 237, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Show binary contents"), "html", null, true);
            yield "</label>
              </div>

              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"display_blob\" id=\"display_blob_";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 241, $this->source); })()), "html", null, true);
            yield "\"";
            // line 242
            yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 242, $this->source); })()), "options", [], "any", false, false, false, 242), "display_blob", [], "any", false, false, false, 242))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
            yield ">
                <label class=\"form-check-label\" for=\"display_blob_";
            // line 243
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 243, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Show BLOB contents"), "html", null, true);
            yield "</label>
              </div>
            </fieldset>

            ";
            // line 251
            yield "            <div class=\"col-auto\">
              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"hide_transformation\" id=\"hide_transformation_";
            // line 253
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 253, $this->source); })()), "html", null, true);
            yield "\"";
            // line 254
            yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 254, $this->source); })()), "options", [], "any", false, false, false, 254), "hide_transformation", [], "any", false, false, false, 254))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
            yield ">
                <label class=\"form-check-label\" for=\"hide_transformation_";
            // line 255
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 255, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Hide browser transformation"), "html", null, true);
            yield "</label>
              </div>
            </div>

            <fieldset class=\"col-auto\">
              ";
            // line 260
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 260, $this->source); })()), "options", [], "any", false, false, false, 260), "possible_as_geometry", [], "any", false, false, false, 260)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 261
                yield "                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"radio\" name=\"geoOption\" id=\"geoOptionRadioGeom";
                // line 262
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 262, $this->source); })()), "html", null, true);
                yield "\" value=\"GEOM\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 262, $this->source); })()), "options", [], "any", false, false, false, 262), "geo_option", [], "any", false, false, false, 262) == "GEOM")) ? (" checked") : (""));
                yield ">
                  <label class=\"form-check-label\" for=\"geoOptionRadioGeom";
                // line 263
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 263, $this->source); })()), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Geometry"), "html", null, true);
                yield "</label>
                </div>
              ";
            }
            // line 266
            yield "              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"geoOption\" id=\"geoOptionRadioWkt";
            // line 267
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 267, $this->source); })()), "html", null, true);
            yield "\" value=\"WKT\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 267, $this->source); })()), "options", [], "any", false, false, false, 267), "geo_option", [], "any", false, false, false, 267) == "WKT")) ? (" checked") : (""));
            yield ">
                <label class=\"form-check-label\" for=\"geoOptionRadioWkt";
            // line 268
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 268, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Well Known Text"), "html", null, true);
            yield "</label>
              </div>
              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"geoOption\" id=\"geoOptionRadioWkb";
            // line 271
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 271, $this->source); })()), "html", null, true);
            yield "\" value=\"WKB\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 271, $this->source); })()), "options", [], "any", false, false, false, 271), "geo_option", [], "any", false, false, false, 271) == "WKB")) ? (" checked") : (""));
            yield ">
                <label class=\"form-check-label\" for=\"geoOptionRadioWkb";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 272, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Well Known Binary"), "html", null, true);
            yield "</label>
              </div>
            </fieldset>
          </div>
        </div>

        <div class=\"card-footer\">
          <input class=\"btn btn-primary\" type=\"submit\" value=\"";
            // line 279
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
            yield "\">
        </div>
      </div>
    ";
            // line 282
            if (((isset($context["default_sliders_state"]) || array_key_exists("default_sliders_state", $context) ? $context["default_sliders_state"] : (function () { throw new RuntimeError('Variable "default_sliders_state" does not exist.', 282, $this->source); })()) != "disabled")) {
                // line 283
                yield "    </div>
    ";
            }
            // line 285
            yield "  </form>
";
        }
        // line 287
        yield "
";
        // line 288
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 288, $this->source); })()), "has_bulk_actions_form", [], "any", false, false, false, 288)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 289
            yield "  <form method=\"post\" name=\"resultsForm\" id=\"resultsForm_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 289, $this->source); })()), "html", null, true);
            yield "\" class=\"ajax\">
    ";
            // line 290
            yield PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 290, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 290, $this->source); })()));
            yield "
    <input type=\"hidden\" name=\"goto\" value=\"";
            // line 291
            yield PhpMyAdmin\Url::getFromRoute("/sql");
            yield "\">
";
        }
        // line 293
        yield "
  <div class=\"table-responsive-md\">
    <table class=\"table table-striped table-hover table-sm table_results data ajax w-auto\" data-uniqueId=\"";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 295, $this->source); })()), "html", null, true);
        yield "\">
      <thead>
        <tr>

          ";
        // line 299
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 299, $this->source); })()), "button", [], "any", false, false, false, 299);
        yield "
          ";
        // line 300
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 300, $this->source); })()), "table_headers_for_columns", [], "any", false, false, false, 300);
        yield "
          ";
        // line 301
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 301, $this->source); })()), "column_at_right_side", [], "any", false, false, false, 301);
        yield "

        </tr>
      </thead>

      <tbody>
        ";
        // line 307
        yield (isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 307, $this->source); })());
        yield "
      </tbody>
    </table>
  </div>

";
        // line 312
        if ((array_key_exists("has_bulk_links", $context) && (isset($context["has_bulk_links"]) || array_key_exists("has_bulk_links", $context) ? $context["has_bulk_links"] : (function () { throw new RuntimeError('Variable "has_bulk_links" does not exist.', 312, $this->source); })()))) {
            // line 313
            yield "    <div class=\"d-print-none\">
      ";
            // line 314
            yield PhpMyAdmin\Html\Generator::getImage("select_all_arrow", \_gettext("With selected:"), ["dir" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["pma"]) || array_key_exists("pma", $context) ? $context["pma"] : (function () { throw new RuntimeError('Variable "pma" does not exist.', 314, $this->source); })()), "text_dir", [], "any", false, false, false, 314), "width" => "38", "height" => "22"]);
            yield "
      <input type=\"checkbox\" id=\"resultsForm_";
            // line 315
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 315, $this->source); })()), "html", null, true);
            yield "_checkall\" class=\"checkall_box\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check all"), "html", null, true);
            yield "\">
      <label for=\"resultsForm_";
            // line 316
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 316, $this->source); })()), "html", null, true);
            yield "_checkall\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check all"), "html", null, true);
            yield "</label>
      <em class=\"with-selected\">";
            // line 317
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("With selected:"), "html", null, true);
            yield "</em>

      <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"edit\" title=\"";
            // line 319
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Edit"), "html", null, true);
            yield "\">
        ";
            // line 320
            yield PhpMyAdmin\Html\Generator::getIcon("b_edit", \_gettext("Edit"));
            yield "
      </button>

      <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"copy\" title=\"";
            // line 323
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Copy"), "html", null, true);
            yield "\">
        ";
            // line 324
            yield PhpMyAdmin\Html\Generator::getIcon("b_insrow", \_gettext("Copy"));
            yield "
      </button>

      <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"delete\" title=\"";
            // line 327
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Delete"), "html", null, true);
            yield "\">
        ";
            // line 328
            yield PhpMyAdmin\Html\Generator::getIcon("b_drop", \_gettext("Delete"));
            yield "
      </button>

      ";
            // line 331
            if ((($tmp = (isset($context["has_export_button"]) || array_key_exists("has_export_button", $context) ? $context["has_export_button"] : (function () { throw new RuntimeError('Variable "has_export_button" does not exist.', 331, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 332
                yield "        <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"export\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Export"), "html", null, true);
                yield "\">
          ";
                // line 333
                yield PhpMyAdmin\Html\Generator::getIcon("b_tblexport", \_gettext("Export"));
                yield "
        </button>
      ";
            }
            // line 336
            yield "    </div>

    <input type=\"hidden\" name=\"clause_is_unique\" value=\"";
            // line 338
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["clause_is_unique"]) || array_key_exists("clause_is_unique", $context) ? $context["clause_is_unique"] : (function () { throw new RuntimeError('Variable "clause_is_unique" does not exist.', 338, $this->source); })()), "html", null, true);
            yield "\">
    <input type=\"hidden\" name=\"sql_query\" value=\"";
            // line 339
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sql_query"]) || array_key_exists("sql_query", $context) ? $context["sql_query"] : (function () { throw new RuntimeError('Variable "sql_query" does not exist.', 339, $this->source); })()), "html", null, true);
            yield "\">
  </form>
";
        }
        // line 342
        yield "
";
        // line 343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["navigation_html"]) || array_key_exists("navigation_html", $context) ? $context["navigation_html"] : (function () { throw new RuntimeError('Variable "navigation_html" does not exist.', 343, $this->source); })()), "html", null, true);
        yield "

";
        // line 345
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 345, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 346
            yield "  <div class=\"card mb-3 d-print-none\">
    <div class=\"card-header\">";
            // line 347
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Query results operations"), "html", null, true);
            yield "</div>

    <div class=\"card-body\">
      ";
            // line 350
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 350, $this->source); })()), "has_print_link", [], "any", false, false, false, 350)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 351
                yield "        <button type=\"button\" class=\"btn btn-link jsPrintButton\">";
                yield PhpMyAdmin\Html\Generator::getIcon("b_print", \_gettext("Print"), true);
                yield "</button>

        ";
                // line 353
                yield PhpMyAdmin\Html\Generator::linkOrButton("#", null, PhpMyAdmin\Html\Generator::getIcon("b_insrow", \_gettext("Copy to clipboard"), true), ["id" => "copyToClipBoard", "class" => "btn"]);
                // line 358
                yield "
      ";
            }
            // line 360
            yield "
      ";
            // line 361
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 361, $this->source); })()), "has_procedure", [], "any", false, false, false, 361)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 362
                yield "        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 362, $this->source); })()), "has_export_link", [], "any", false, false, false, 362)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 363
                    yield "          ";
                    yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/table/export"), CoreExtension::getAttribute($this->env, $this->source,                     // line 365
(isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 365, $this->source); })()), "url_params", [], "any", false, false, false, 365), PhpMyAdmin\Html\Generator::getIcon("b_tblexport", \_gettext("Export"), true), ["class" => "btn"]);
                    // line 368
                    yield "

          ";
                    // line 370
                    yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/table/chart"), CoreExtension::getAttribute($this->env, $this->source,                     // line 372
(isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 372, $this->source); })()), "url_params", [], "any", false, false, false, 372), PhpMyAdmin\Html\Generator::getIcon("b_chart", \_gettext("Display chart"), true), ["class" => "btn"]);
                    // line 375
                    yield "

          ";
                    // line 377
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 377, $this->source); })()), "has_geometry", [], "any", false, false, false, 377)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 378
                        yield "            ";
                        yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/table/gis-visualization"), CoreExtension::getAttribute($this->env, $this->source,                         // line 380
(isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 380, $this->source); })()), "url_params", [], "any", false, false, false, 380), PhpMyAdmin\Html\Generator::getIcon("b_globe", \_gettext("Visualize GIS data"), true), ["class" => "btn"]);
                        // line 383
                        yield "
          ";
                    }
                    // line 385
                    yield "        ";
                }
                // line 386
                yield "
        <span>
          ";
                // line 388
                yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/view/create"), ["db" =>                 // line 390
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 390, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 390, $this->source); })()), "sql_query" => (isset($context["sql_query"]) || array_key_exists("sql_query", $context) ? $context["sql_query"] : (function () { throw new RuntimeError('Variable "sql_query" does not exist.', 390, $this->source); })()), "printview" => true], PhpMyAdmin\Html\Generator::getIcon("b_view_add", \_gettext("Create view"), true), ["class" => "btn create_view ajax"]);
                // line 393
                yield "
        </span>
      ";
            }
            // line 396
            yield "    </div>
  </div>
";
        }
        // line 399
        if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 399, $this->source); })())) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 399, $this->source); })()), "has_procedure", [], "any", false, false, false, 399))) {
            // line 400
            yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/create_view.twig");
            yield "
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "display/results/table.twig";
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
        return array (  975 => 400,  973 => 399,  968 => 396,  963 => 393,  961 => 390,  960 => 388,  956 => 386,  953 => 385,  949 => 383,  947 => 380,  945 => 378,  943 => 377,  939 => 375,  937 => 372,  936 => 370,  932 => 368,  930 => 365,  928 => 363,  925 => 362,  923 => 361,  920 => 360,  916 => 358,  914 => 353,  908 => 351,  906 => 350,  900 => 347,  897 => 346,  895 => 345,  890 => 343,  887 => 342,  881 => 339,  877 => 338,  873 => 336,  867 => 333,  862 => 332,  860 => 331,  854 => 328,  850 => 327,  844 => 324,  840 => 323,  834 => 320,  830 => 319,  825 => 317,  819 => 316,  813 => 315,  809 => 314,  806 => 313,  804 => 312,  796 => 307,  787 => 301,  783 => 300,  779 => 299,  772 => 295,  768 => 293,  763 => 291,  759 => 290,  754 => 289,  752 => 288,  749 => 287,  745 => 285,  741 => 283,  739 => 282,  733 => 279,  721 => 272,  715 => 271,  707 => 268,  701 => 267,  698 => 266,  690 => 263,  684 => 262,  681 => 261,  679 => 260,  669 => 255,  665 => 254,  662 => 253,  658 => 251,  649 => 243,  645 => 242,  642 => 241,  633 => 237,  629 => 236,  626 => 235,  621 => 232,  612 => 228,  606 => 227,  598 => 224,  592 => 223,  588 => 221,  586 => 220,  577 => 216,  571 => 215,  563 => 212,  557 => 211,  549 => 205,  544 => 203,  538 => 200,  534 => 199,  531 => 198,  529 => 197,  525 => 195,  523 => 193,  522 => 192,  521 => 191,  520 => 190,  519 => 189,  514 => 188,  512 => 187,  509 => 186,  502 => 183,  499 => 182,  493 => 180,  490 => 179,  484 => 177,  481 => 176,  479 => 175,  473 => 172,  468 => 170,  463 => 168,  458 => 166,  455 => 165,  446 => 159,  441 => 156,  428 => 154,  424 => 153,  419 => 151,  415 => 150,  410 => 149,  408 => 148,  398 => 143,  391 => 139,  382 => 132,  369 => 130,  364 => 129,  361 => 128,  358 => 127,  356 => 126,  351 => 125,  348 => 124,  346 => 123,  341 => 121,  337 => 119,  335 => 118,  334 => 117,  333 => 116,  329 => 115,  321 => 110,  312 => 104,  307 => 101,  297 => 96,  293 => 95,  290 => 94,  287 => 93,  285 => 91,  284 => 90,  280 => 89,  277 => 88,  275 => 87,  272 => 86,  268 => 84,  266 => 83,  263 => 82,  260 => 81,  250 => 77,  246 => 75,  242 => 73,  240 => 72,  238 => 71,  234 => 70,  230 => 69,  226 => 68,  222 => 67,  218 => 66,  212 => 65,  209 => 64,  207 => 63,  197 => 59,  193 => 57,  189 => 55,  187 => 54,  185 => 53,  181 => 52,  177 => 51,  173 => 50,  169 => 49,  165 => 48,  161 => 47,  158 => 46,  156 => 45,  151 => 43,  148 => 42,  138 => 38,  132 => 35,  130 => 34,  128 => 33,  126 => 32,  122 => 31,  118 => 30,  114 => 29,  110 => 28,  106 => 27,  102 => 26,  91 => 21,  85 => 18,  83 => 17,  81 => 16,  79 => 15,  75 => 14,  71 => 13,  66 => 11,  62 => 10,  58 => 9,  55 => 8,  53 => 7,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set navigation_html %}
  {% if navigation is not empty %}
    <table class=\"navigation d-print-none\">
      <tr>
        <td class=\"navigation_separator\"></td>

        {% if navigation.pos and not navigation.is_showing_all %}
          <td>
            <form action=\"{{ url('/sql') }}\" method=\"post\">
              {{ get_hidden_inputs(db, table) }}
              <input type=\"hidden\" name=\"sql_query\" value=\"{{ sql_query }}\">
              <input type=\"hidden\" name=\"pos\" value=\"0\">
              <input type=\"hidden\" name=\"is_browse_distinct\" value=\"{{ is_browse_distinct }}\">
              <input type=\"hidden\" name=\"goto\" value=\"{{ goto }}\">
              {% set begin_text %}
                {{- show_icons('TableNavigationLinksMode') ? '<<' }}
                {%- if show_text('TableNavigationLinksMode') -%}
                  &nbsp;{{ t('Begin', context = 'First page') }}
                {%- endif -%}
              {% endset %}
              <input type=\"submit\" name=\"navig\" class=\"btn btn-secondary ajax\" value=\"{{ begin_text }}\" title=\"{{ t('Begin', context = 'First page') }}\">
            </form>
          </td>

          <td>
            <form action=\"{{ url('/sql') }}\" method=\"post\">
              {{ get_hidden_inputs(db, table) }}
              <input type=\"hidden\" name=\"sql_query\" value=\"{{ sql_query }}\">
              <input type=\"hidden\" name=\"pos\" value=\"{{ navigation.pos_previous }}\">
              <input type=\"hidden\" name=\"is_browse_distinct\" value=\"{{ is_browse_distinct }}\">
              <input type=\"hidden\" name=\"goto\" value=\"{{ goto }}\">
              {% set previous_text %}
                {{- show_icons('TableNavigationLinksMode') ? '<' }}
                {%- if show_text('TableNavigationLinksMode') -%}
                  &nbsp;{{ t('Previous', context = 'Previous page') }}
                {%- endif -%}
              {% endset %}
              <input type=\"submit\" name=\"navig\" class=\"btn btn-secondary ajax\" value=\"{{ previous_text }}\" title=\"{{ t('Previous', context = 'Previous page') }}\">
            </form>
          </td>
        {% endif %}

        {{ navigation.page_selector|raw }}

        {% if not navigation.is_last_page %}
          <td>
            <form action=\"{{ url('/sql') }}\" method=\"post\">
              {{ get_hidden_inputs(db, table) }}
              <input type=\"hidden\" name=\"sql_query\" value=\"{{ sql_query }}\">
              <input type=\"hidden\" name=\"pos\" value=\"{{ navigation.pos_next }}\">
              <input type=\"hidden\" name=\"is_browse_distinct\" value=\"{{ is_browse_distinct }}\">
              <input type=\"hidden\" name=\"goto\" value=\"{{ goto }}\">
              {% set next_text %}
                {%- if show_text('TableNavigationLinksMode') -%}
                  {{ t('Next', context = 'Next page') }}&nbsp;
                {%- endif -%}
                {{ show_icons('TableNavigationLinksMode') ? '>' -}}
              {% endset %}
              <input type=\"submit\" name=\"navig\" class=\"btn btn-secondary ajax\" value=\"{{ next_text }}\" title=\"{{ t('Next', context = 'Next page') }}\">
            </form>
          </td>

          {% if navigation.is_last_page_known %}
          <td>
            <form action=\"{{ url('/sql') }}\" method=\"post\"{{ navigation.onsubmit|raw }}>
              {{ get_hidden_inputs(db, table) }}
              <input type=\"hidden\" name=\"sql_query\" value=\"{{ sql_query }}\">
              <input type=\"hidden\" name=\"pos\" value=\"{{ navigation.pos_last }}\">
              <input type=\"hidden\" name=\"is_browse_distinct\" value=\"{{ is_browse_distinct }}\">
              <input type=\"hidden\" name=\"goto\" value=\"{{ goto }}\">
              {% set end_text %}
                {%- if show_text('TableNavigationLinksMode') -%}
                  {{ t('End', context = 'Last page') }}&nbsp;
                {%- endif -%}
                {{ show_icons('TableNavigationLinksMode') ? '>>' -}}
              {% endset %}
              <input type=\"submit\" name=\"navig\" class=\"btn btn-secondary ajax\" value=\"{{ end_text }}\" title=\"{{ t('End', context = 'Last page') }}\">
            </form>
          </td>
          {% endif %}
        {% endif %}

        {% if navigation.number_total_page != 1 %}
          <td><div class=\"navigation_separator\">|</div></td>
        {% endif %}

        {% if navigation.has_show_all %}
          <td>
            <form action=\"{{ url('/sql') }}\" method=\"post\">
              {{ get_hidden_fields(navigation.hidden_fields|merge({
                'session_max_rows': navigation.session_max_rows,
                'pos': '0'
              })) }}
              <input type=\"checkbox\" name=\"navig\" id=\"showAll_{{ unique_id }}\" class=\"showAllRows\" value=\"all\"
                {{- navigation.is_showing_all ? ' checked' }}>
              <label for=\"showAll_{{ unique_id }}\">{{ t('Show all') }}</label>
            </form>
          </td>
          <td><div class=\"navigation_separator\">|</div></td>
        {% endif %}

        <td>
          <div class=\"save_edited hide\">
            <input class=\"btn btn-link\" type=\"submit\" value=\"{{ t('Save edited data') }}\">
            <div class=\"navigation_separator\">|</div>
          </div>
        </td>
        <td>
          <div class=\"restore_column hide\">
            <input class=\"btn btn-link\" type=\"submit\" value=\"{{ t('Restore column order') }}\">
            <div class=\"navigation_separator\">|</div>
          </div>
        </td>
        <td class=\"navigation_goto\">
          <form action=\"{{ url('/sql') }}\" method=\"post\" class=\"maxRowsForm\">
            {{ get_hidden_fields(navigation.hidden_fields|merge({
              'pos': navigation.pos,
              'unlim_num_rows': unlim_num_rows
            })) }}

            <label for=\"sessionMaxRowsSelect\">{{ t('Number of rows:') }}</label>
            <select class=\"autosubmit\" name=\"session_max_rows\" id=\"sessionMaxRowsSelect\">
              {% set rows_options = [25, 50, 100, 250, 500] %}
              {% if navigation.is_showing_all %}
                <option value=\"\" disabled selected>{{ t('All') }}</option>
              {% elseif navigation.max_rows not in rows_options %}
                {% set rows_options = rows_options|merge([navigation.max_rows])|sort((a, b) => a <=> b) %}
              {% endif %}
              {% for option in rows_options %}
                <option value=\"{{ option }}\"{{ navigation.max_rows == option ? ' selected' }}>{{ option }}</option>
              {% endfor %}
            </select>
          </form>
        </td>
        <td class=\"navigation_separator\"></td>
        <td class=\"largescreenonly\">
          <div class=\"row g-1 p-1 align-items-center\">
            <div class=\"col-auto\">
              <label for=\"filterRows\" class=\"col-form-label\">{{ t('Filter rows:') }}</label>
            </div>
            <div class=\"col-auto\">
              <input type=\"text\" id=\"filterRows\" class=\"filter_rows form-control\"
                    placeholder=\"{{ t('Search this table') }}\" data-for=\"{{ unique_id }}\">
            </div>
          </div>
        </td>
        <td class=\"largescreenonly\">
          {% if navigation.sort_by_key is not empty %}
            <form action=\"{{ url('/sql') }}\" method=\"post\" class=\"d-print-none\">
              {{ get_hidden_fields(navigation.sort_by_key.hidden_fields) }}
              {{ t('Sort by key:') }}
              <select name=\"sql_query\" class=\"autosubmit\">
                {% for option in navigation.sort_by_key.options %}
                  <option value=\"{{ option.value }}\"{{ option.is_selected ? ' selected' }}>{{ option.content }}</option>
                {% endfor %}
              </select>
            </form>
          {% endif %}
        </td>
        <td class=\"navigation_separator\"></td>
      </tr>
    </table>
  {% endif %}
{% endset %}

{{ sql_query_message|raw }}

{{ navigation_html }}

<input class=\"save_cells_at_once\" type=\"hidden\" value=\"{{ save_cells_at_once }}\">
<div class=\"common_hidden_inputs\">
  {{ get_hidden_inputs(db, table) }}
</div>

{% if headers.column_order is not empty %}
  {% if headers.column_order.order %}
    <input class=\"col_order\" type=\"hidden\" value=\"{{ headers.column_order.order|join(',') }}\">
  {% endif %}
  {% if headers.column_order.visibility %}
    <input class=\"col_visib\" type=\"hidden\" value=\"{{ headers.column_order.visibility|join(',') }}\">
  {% endif %}
  {% if not headers.column_order.is_view %}
    <input class=\"table_create_time\" type=\"hidden\" value=\"{{ headers.column_order.table_create_time }}\">
  {% endif %}
{% endif %}

{% if headers.options is not empty %}
  <form method=\"post\" action=\"{{ url('/sql') }}\" name=\"displayOptionsForm\" class=\"ajax d-print-none\">
    {{ get_hidden_inputs({
      'db': db,
      'table': table,
      'sql_query': sql_query,
      'goto': goto,
      'display_options_form': 1
    }) }}

    {% if default_sliders_state != 'disabled' %}
    <div class=\"mb-3\">
      <button class=\"btn btn-sm btn-secondary\" type=\"button\" id=\"extraOptionsButton\" data-bs-toggle=\"collapse\" data-bs-target=\"#extraOptions\" aria-expanded=\"{{ default_sliders_state == 'open' ? 'true' : 'false' }}\" aria-controls=\"extraOptions\">
        {{ t('Extra options') }}
      </button>
    </div>
    <div class=\"collapse mb-3{{ default_sliders_state == 'open' ? ' show' }}\" id=\"extraOptions\">
    {% endif %}

      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"row\">
            <fieldset class=\"col-auto\">
              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"pftext\" id=\"partialFulltextRadioP{{ unique_id }}\" value=\"P\"{{ headers.options.pftext == 'P' ? ' checked' }}>
                <label class=\"form-check-label\" for=\"partialFulltextRadioP{{ unique_id }}\">{{ t('Partial texts') }}</label>
              </div>
              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"pftext\" id=\"partialFulltextRadioF{{ unique_id }}\" value=\"F\"{{ headers.options.pftext == 'F' ? ' checked' }}>
                <label class=\"form-check-label\" for=\"partialFulltextRadioF{{ unique_id }}\">{{ t('Full texts') }}</label>
              </div>
            </fieldset>

            {% if relwork and displaywork %}
              <fieldset class=\"col-auto\">
                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"radio\" name=\"relational_display\" id=\"relationalDisplayRadioK{{ unique_id }}\" value=\"K\"{{ headers.options.relational_display == 'K' ? ' checked' }}>
                  <label class=\"form-check-label\" for=\"relationalDisplayRadioK{{ unique_id }}\">{{ t('Relational key') }}</label>
                </div>
                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"radio\" name=\"relational_display\" id=\"relationalDisplayRadioD{{ unique_id }}\" value=\"D\"{{ headers.options.relational_display == 'D' ? ' checked' }}>
                  <label class=\"form-check-label\" for=\"relationalDisplayRadioD{{ unique_id }}\">{{ t('Display column for relationships') }}</label>
                </div>
              </fieldset>
            {% endif %}

            <fieldset class=\"col-auto\">
              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"display_binary\" id=\"display_binary_{{ unique_id }}\"
                  {{- headers.options.display_binary is not empty ? ' checked' }}>
                <label class=\"form-check-label\" for=\"display_binary_{{ unique_id }}\">{{ t('Show binary contents') }}</label>
              </div>

              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"display_blob\" id=\"display_blob_{{ unique_id }}\"
                  {{- headers.options.display_blob is not empty ? ' checked' }}>
                <label class=\"form-check-label\" for=\"display_blob_{{ unique_id }}\">{{ t('Show BLOB contents') }}</label>
              </div>
            </fieldset>

            {# I would have preferred to name this \"display_transformation\".
               This is the only way I found to be able to keep this setting sticky
               per SQL query, and at the same time have a default that displays
               the transformations. #}
            <div class=\"col-auto\">
              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"hide_transformation\" id=\"hide_transformation_{{ unique_id }}\"
                  {{- headers.options.hide_transformation is not empty ? ' checked' }}>
                <label class=\"form-check-label\" for=\"hide_transformation_{{ unique_id }}\">{{ t('Hide browser transformation') }}</label>
              </div>
            </div>

            <fieldset class=\"col-auto\">
              {% if headers.options.possible_as_geometry %}
                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"radio\" name=\"geoOption\" id=\"geoOptionRadioGeom{{ unique_id }}\" value=\"GEOM\"{{ headers.options.geo_option == 'GEOM' ? ' checked' }}>
                  <label class=\"form-check-label\" for=\"geoOptionRadioGeom{{ unique_id }}\">{{ t('Geometry') }}</label>
                </div>
              {% endif %}
              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"geoOption\" id=\"geoOptionRadioWkt{{ unique_id }}\" value=\"WKT\"{{ headers.options.geo_option == 'WKT' ? ' checked' }}>
                <label class=\"form-check-label\" for=\"geoOptionRadioWkt{{ unique_id }}\">{{ t('Well Known Text') }}</label>
              </div>
              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"geoOption\" id=\"geoOptionRadioWkb{{ unique_id }}\" value=\"WKB\"{{ headers.options.geo_option == 'WKB' ? ' checked' }}>
                <label class=\"form-check-label\" for=\"geoOptionRadioWkb{{ unique_id }}\">{{ t('Well Known Binary') }}</label>
              </div>
            </fieldset>
          </div>
        </div>

        <div class=\"card-footer\">
          <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ t('Go') }}\">
        </div>
      </div>
    {% if default_sliders_state != 'disabled' %}
    </div>
    {% endif %}
  </form>
{% endif %}

{% if headers.has_bulk_actions_form %}
  <form method=\"post\" name=\"resultsForm\" id=\"resultsForm_{{ unique_id }}\" class=\"ajax\">
    {{ get_hidden_inputs(db, table) }}
    <input type=\"hidden\" name=\"goto\" value=\"{{ url('/sql') }}\">
{% endif %}

  <div class=\"table-responsive-md\">
    <table class=\"table table-striped table-hover table-sm table_results data ajax w-auto\" data-uniqueId=\"{{ unique_id }}\">
      <thead>
        <tr>

          {{ headers.button|raw }}
          {{ headers.table_headers_for_columns|raw }}
          {{ headers.column_at_right_side|raw }}

        </tr>
      </thead>

      <tbody>
        {{ body|raw }}
      </tbody>
    </table>
  </div>

{% if has_bulk_links is defined and has_bulk_links %}
    <div class=\"d-print-none\">
      {{ get_image('select_all_arrow', t('With selected:'), {'dir': pma.text_dir, 'width': '38', 'height': '22'}) }}
      <input type=\"checkbox\" id=\"resultsForm_{{ unique_id }}_checkall\" class=\"checkall_box\" title=\"{{ t('Check all') }}\">
      <label for=\"resultsForm_{{ unique_id }}_checkall\">{{ t('Check all') }}</label>
      <em class=\"with-selected\">{{ t('With selected:') }}</em>

      <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"edit\" title=\"{{ t('Edit') }}\">
        {{ get_icon('b_edit', t('Edit')) }}
      </button>

      <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"copy\" title=\"{{ t('Copy') }}\">
        {{ get_icon('b_insrow', t('Copy')) }}
      </button>

      <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"delete\" title=\"{{ t('Delete') }}\">
        {{ get_icon('b_drop', t('Delete')) }}
      </button>

      {% if has_export_button %}
        <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"export\" title=\"{{ t('Export') }}\">
          {{ get_icon('b_tblexport', t('Export')) }}
        </button>
      {% endif %}
    </div>

    <input type=\"hidden\" name=\"clause_is_unique\" value=\"{{ clause_is_unique }}\">
    <input type=\"hidden\" name=\"sql_query\" value=\"{{ sql_query }}\">
  </form>
{% endif %}

{{ navigation_html }}

{% if operations is not empty %}
  <div class=\"card mb-3 d-print-none\">
    <div class=\"card-header\">{{ t('Query results operations') }}</div>

    <div class=\"card-body\">
      {% if operations.has_print_link %}
        <button type=\"button\" class=\"btn btn-link jsPrintButton\">{{ get_icon('b_print', t('Print'), true) }}</button>

        {{ link_or_button(
          '#',
          null,
          get_icon('b_insrow', t('Copy to clipboard'), true),
          {'id': 'copyToClipBoard', 'class': 'btn'}
        ) }}
      {% endif %}

      {% if not operations.has_procedure %}
        {% if operations.has_export_link %}
          {{ link_or_button(
            url('/table/export'),
            operations.url_params,
            get_icon('b_tblexport', t('Export'), true),
            {'class': 'btn'}
          ) }}

          {{ link_or_button(
            url('/table/chart'),
            operations.url_params,
            get_icon('b_chart', t('Display chart'), true),
            {'class': 'btn'}
          ) }}

          {% if operations.has_geometry %}
            {{ link_or_button(
              url('/table/gis-visualization'),
              operations.url_params,
              get_icon('b_globe', t('Visualize GIS data'), true),
              {'class': 'btn'}
            ) }}
          {% endif %}
        {% endif %}

        <span>
          {{ link_or_button(
            url('/view/create'),
            {'db': db, 'table': table, 'sql_query': sql_query, 'printview': true},
            get_icon('b_view_add', t('Create view'), true),
            {'class': 'btn create_view ajax'}
          ) }}
        </span>
      {% endif %}
    </div>
  </div>
{% endif %}
{% if operations is not empty and not operations.has_procedure %}
{{ include('modals/create_view.twig') }}
{% endif %}
", "display/results/table.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/display/results/table.twig");
    }
}

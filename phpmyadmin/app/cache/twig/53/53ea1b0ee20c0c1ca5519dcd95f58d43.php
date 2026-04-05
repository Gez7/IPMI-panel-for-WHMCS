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

/* sql/query.twig */
class __TwigTemplate_92be6e0117b344a11a5f7a16a806956e extends Template
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
        yield "<form method=\"post\" action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/import");
        yield "\" class=\"ajax lock-page\" id=\"sqlqueryform\" name=\"sqlform\"";
        // line 2
        yield (((($tmp = (isset($context["is_upload"]) || array_key_exists("is_upload", $context) ? $context["is_upload"] : (function () { throw new RuntimeError('Variable "is_upload" does not exist.', 2, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" enctype=\"multipart/form-data\"") : (""));
        yield ">
  ";
        // line 3
        yield PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 3, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 3, $this->source); })()));
        yield "
  <input type=\"hidden\" name=\"is_js_confirmed\" value=\"0\">
  <input type=\"hidden\" name=\"pos\" value=\"0\">
  <input type=\"hidden\" name=\"goto\" value=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["goto"]) || array_key_exists("goto", $context) ? $context["goto"] : (function () { throw new RuntimeError('Variable "goto" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "\">
  <input type=\"hidden\" name=\"message_to_show\" value=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Your SQL query has been executed successfully."), "html", null, true);
        yield "\">
  <input type=\"hidden\" name=\"prev_sql_query\" value=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 8, $this->source); })()), "html", null, true);
        yield "\">

  ";
        // line 10
        if ((((isset($context["display_tab"]) || array_key_exists("display_tab", $context) ? $context["display_tab"] : (function () { throw new RuntimeError('Variable "display_tab" does not exist.', 10, $this->source); })()) == "full") || ((isset($context["display_tab"]) || array_key_exists("display_tab", $context) ? $context["display_tab"] : (function () { throw new RuntimeError('Variable "display_tab" does not exist.', 10, $this->source); })()) == "sql"))) {
            // line 11
            yield "    <a id=\"querybox\"></a>

    <div class=\"card mb-3\">
      <div class=\"card-header\">";
            // line 14
            yield (isset($context["legend"]) || array_key_exists("legend", $context) ? $context["legend"] : (function () { throw new RuntimeError('Variable "legend" does not exist.', 14, $this->source); })());
            yield "</div>
      <div class=\"card-body\">
        <div id=\"queryfieldscontainer\">
          <div class=\"row\">
            <div class=\"col\">
              <div class=\"mb-3\">
                <textarea class=\"form-control\" tabindex=\"100\" name=\"sql_query\" id=\"sqlquery\" cols=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["textarea_cols"]) || array_key_exists("textarea_cols", $context) ? $context["textarea_cols"] : (function () { throw new RuntimeError('Variable "textarea_cols" does not exist.', 20, $this->source); })()), "html", null, true);
            yield "\" rows=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["textarea_rows"]) || array_key_exists("textarea_rows", $context) ? $context["textarea_rows"] : (function () { throw new RuntimeError('Variable "textarea_rows" does not exist.', 20, $this->source); })()), "html", null, true);
            yield "\" data-textarea-auto-select=\"";
            yield (((($tmp = (isset($context["textarea_auto_select"]) || array_key_exists("textarea_auto_select", $context) ? $context["textarea_auto_select"] : (function () { throw new RuntimeError('Variable "textarea_auto_select" does not exist.', 20, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
            yield "\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("SQL query"), "html", null, true);
            yield "\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 21, $this->source); })()), "html", null, true);
            // line 22
            yield "</textarea>
              </div>
              <div id=\"querymessage\"></div>

              <div class=\"btn-toolbar\" role=\"toolbar\">
                ";
            // line 27
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["columns_list"]) || array_key_exists("columns_list", $context) ? $context["columns_list"] : (function () { throw new RuntimeError('Variable "columns_list" does not exist.', 27, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 28
                yield "                  <div class=\"btn-group me-2\" role=\"group\">
                    <input type=\"button\" value=\"SELECT *\" id=\"selectall\" class=\"btn btn-secondary button sqlbutton\">
                    <input type=\"button\" value=\"SELECT\" id=\"select\" class=\"btn btn-secondary button sqlbutton\">
                    <input type=\"button\" value=\"INSERT\" id=\"insert\" class=\"btn btn-secondary button sqlbutton\">
                    <input type=\"button\" value=\"UPDATE\" id=\"update\" class=\"btn btn-secondary button sqlbutton\">
                    <input type=\"button\" value=\"DELETE\" id=\"delete\" class=\"btn btn-secondary button sqlbutton\">
                  </div>
                ";
            }
            // line 36
            yield "
                <div class=\"btn-group me-2\" role=\"group\">
                  <input type=\"button\" value=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Clear"), "html", null, true);
            yield "\" id=\"clear\" class=\"btn btn-secondary button sqlbutton\">
                  ";
            // line 39
            if ((($tmp = (isset($context["codemirror_enable"]) || array_key_exists("codemirror_enable", $context) ? $context["codemirror_enable"] : (function () { throw new RuntimeError('Variable "codemirror_enable" does not exist.', 39, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 40
                yield "                    <input type=\"button\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Format"), "html", null, true);
                yield "\" id=\"format\" class=\"btn btn-secondary button sqlbutton\">
                    <input type=\"button\" value=\"";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Format as a single line"), "html", null, true);
                yield "\" id=\"formatSingleLine\" class=\"btn btn-secondary button sqlbutton\">
                  ";
            }
            // line 43
            yield "                </div>

                <input type=\"button\" value=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Get auto-saved query"), "html", null, true);
            yield "\" id=\"saved\" class=\"btn btn-secondary button sqlbutton\">
              </div>

              <div class=\"my-3\">
                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"checkbox\" name=\"parameterized\" id=\"parameterized\">
                  <label class=\"form-check-label\" for=\"parameterized\">
                    ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(
// l10n: Bind parameters in the SQL query using :parameterName format
\_gettext("Bind parameters")
, "html", null, true);
            yield "
                    ";
            // line 53
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faq6-40");
            yield "
                  </label>
                </div>
              </div>
              <div class=\"mb-3\" id=\"parametersDiv\"></div>
            </div>

            ";
            // line 60
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["columns_list"]) || array_key_exists("columns_list", $context) ? $context["columns_list"] : (function () { throw new RuntimeError('Variable "columns_list" does not exist.', 60, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 61
                yield "              <div class=\"col-xl-2 col-lg-3\">
                <div class=\"mb-3\">
                  <label class=\"visually-hidden\" for=\"fieldsSelect\">";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Columns"), "html", null, true);
                yield "</label>
                  <select class=\"form-select resize-vertical\" id=\"fieldsSelect\" name=\"dummy\" size=\"";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["textarea_rows"]) || array_key_exists("textarea_rows", $context) ? $context["textarea_rows"] : (function () { throw new RuntimeError('Variable "textarea_rows" does not exist.', 64, $this->source); })()), "html", null, true);
                yield "\" multiple>
                    ";
                // line 65
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["columns_list"]) || array_key_exists("columns_list", $context) ? $context["columns_list"] : (function () { throw new RuntimeError('Variable "columns_list" does not exist.', 65, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 66
                    yield "                      <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::backquote(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "field", [], "any", false, false, false, 66)), "html", null, true);
                    yield "\"";
                    // line 67
                    yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "field", [], "any", false, false, false, 67)) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((" title=\"" . CoreExtension::getAttribute($this->env, $this->source, $context["field"], "comment", [], "any", false, false, false, 67)) . "\""), "html", null, true)) : (""));
                    yield ">
                        ";
                    // line 68
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "field", [], "any", false, false, false, 68), "html", null, true);
                    yield "
                      </option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                yield "                  </select>
                </div>

                <input type=\"button\" class=\"btn btn-secondary button\" id=\"insertBtn\" name=\"insert\" value=\"";
                // line 75
                if ((($tmp = PhpMyAdmin\Util::showIcons("ActionLinksMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<<";
                    yield "\" title=\"";
                }
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Insert"), "html", null, true);
                yield "\">
              </div>
            ";
            }
            // line 79
            yield "          </div>
        </div>

        ";
            // line 82
            if ((($tmp = (isset($context["has_bookmark"]) || array_key_exists("has_bookmark", $context) ? $context["has_bookmark"] : (function () { throw new RuntimeError('Variable "has_bookmark" does not exist.', 82, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 83
                yield "          <div class=\"row row-cols-lg-auto g-3 align-items-center\">
            <div class=\"col-6\">
              <label class=\"form-label\" for=\"bkm_label\">";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Bookmark this SQL query:"), "html", null, true);
                yield "</label>
            </div>
            <div class=\"col-6\">
              <input class=\"form-control\" type=\"text\" name=\"bkm_label\" id=\"bkm_label\" tabindex=\"110\" value=\"\">
            </div>

            ";
                // line 91
                if ((($tmp = (isset($context["allow_shared_bookmarks"]) || array_key_exists("allow_shared_bookmarks", $context) ? $context["allow_shared_bookmarks"] : (function () { throw new RuntimeError('Variable "allow_shared_bookmarks" does not exist.', 91, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 92
                    yield "              <div class=\"col-12\">
                <div class=\"form-check form-check-inline\">
                  <input class=\"form-check-input\" type=\"checkbox\" name=\"bkm_all_users\" tabindex=\"111\" id=\"id_bkm_all_users\" value=\"true\">
                  <label class=\"form-check-label\" for=\"id_bkm_all_users\">";
                    // line 95
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Let every user access this bookmark"), "html", null, true);
                    yield "</label>
                </div>
              </div>
            ";
                }
                // line 99
                yield "
            <div class=\"col-12\">
              <div class=\"form-check form-check-inline\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"bkm_replace\" tabindex=\"112\" id=\"id_bkm_replace\" value=\"true\">
                <label class=\"form-check-label\" for=\"id_bkm_replace\">";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Replace existing bookmark of same name"), "html", null, true);
                yield "</label>
              </div>
            </div>
          </div>
        ";
            }
            // line 108
            yield "      </div>
      <div class=\"card-footer\">
        <div class=\"row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-12\">
            <div class=\"input-group me-2\">
              <span class=\"input-group-text\">";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Delimiter"), "html", null, true);
            yield "</span>
              <label class=\"visually-hidden\" for=\"id_sql_delimiter\">";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Delimiter"), "html", null, true);
            yield "</label>
              <input class=\"form-control\" type=\"text\" name=\"sql_delimiter\" tabindex=\"131\" size=\"3\" value=\"";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["delimiter"]) || array_key_exists("delimiter", $context) ? $context["delimiter"] : (function () { throw new RuntimeError('Variable "delimiter" does not exist.', 115, $this->source); })()), "html", null, true);
            yield "\" id=\"id_sql_delimiter\">
            </div>
          </div>

          <div class=\"col-12\">
            <div class=\"form-check form-check-inline\">
              <input class=\"form-check-input\" type=\"checkbox\" name=\"show_query\" value=\"1\" id=\"checkbox_show_query\" tabindex=\"132\">
              <label class=\"form-check-label\" for=\"checkbox_show_query\">";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Show this query here again"), "html", null, true);
            yield "</label>
            </div>
          </div>

          <div class=\"col-12\">
            <div class=\"form-check form-check-inline\">
              <input class=\"form-check-input\" type=\"checkbox\" name=\"retain_query_box\" value=\"1\" id=\"retain_query_box\" tabindex=\"133\"";
            // line 129
            yield (((($tmp = (isset($context["retain_query_box"]) || array_key_exists("retain_query_box", $context) ? $context["retain_query_box"] : (function () { throw new RuntimeError('Variable "retain_query_box" does not exist.', 129, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
            yield ">
              <label class=\"form-check-label\" for=\"retain_query_box\">";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Retain query box"), "html", null, true);
            yield "</label>
            </div>
          </div>

          <div class=\"col-12\">
            <div class=\"form-check form-check-inline\">
              <input class=\"form-check-input\" type=\"checkbox\" name=\"rollback_query\" value=\"1\" id=\"rollback_query\" tabindex=\"134\">
              <label class=\"form-check-label\" for=\"rollback_query\">";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Rollback when finished"), "html", null, true);
            yield "</label>
            </div>
          </div>

          <div class=\"col-12\">
            <div class=\"form-check\">
              <input type=\"hidden\" name=\"fk_checks\" value=\"0\">
              <input class=\"form-check-input\" type=\"checkbox\" name=\"fk_checks\" id=\"fk_checks\" value=\"1\"";
            // line 144
            yield (((($tmp = (isset($context["is_foreign_key_check"]) || array_key_exists("is_foreign_key_check", $context) ? $context["is_foreign_key_check"] : (function () { throw new RuntimeError('Variable "is_foreign_key_check" does not exist.', 144, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
            yield ">
              <label class=\"form-check-label\" for=\"fk_checks\">";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Enable foreign key checks"), "html", null, true);
            yield "</label>
            </div>
          </div>

          <div class=\"col-12\">
            <input class=\"btn btn-primary ms-1\" type=\"submit\" id=\"button_submit_query\" name=\"SQL\" tabindex=\"200\" value=\"";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
            yield "\">
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 156
        yield "
  ";
        // line 157
        if ((((isset($context["display_tab"]) || array_key_exists("display_tab", $context) ? $context["display_tab"] : (function () { throw new RuntimeError('Variable "display_tab" does not exist.', 157, $this->source); })()) == "full") &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["bookmarks"]) || array_key_exists("bookmarks", $context) ? $context["bookmarks"] : (function () { throw new RuntimeError('Variable "bookmarks" does not exist.', 157, $this->source); })())))) {
            // line 158
            yield "    <div class=\"card mb-3\">
      <div class=\"card-header\">";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Bookmarked SQL query"), "html", null, true);
            yield "</div>
      <div class=\"card-body\">
        <div class=\"row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-6\">
            <label class=\"form-label\" for=\"id_bookmark\">";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Bookmark:"), "html", null, true);
            yield "</label>
          </div>
          <div class=\"col-6\">
            <select class=\"form-select\" name=\"id_bookmark\" id=\"id_bookmark\">
              <option value=\"\">&nbsp;</option>
              ";
            // line 168
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["bookmarks"]) || array_key_exists("bookmarks", $context) ? $context["bookmarks"] : (function () { throw new RuntimeError('Variable "bookmarks" does not exist.', 168, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["bookmark"]) {
                // line 169
                yield "                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bookmark"], "id", [], "any", false, false, false, 169), "html", null, true);
                yield "\" data-varcount=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bookmark"], "variable_count", [], "any", false, false, false, 169), "html", null, true);
                yield "\">
                  ";
                // line 170
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bookmark"], "label", [], "any", false, false, false, 170), "html", null, true);
                yield "
                  ";
                // line 171
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["bookmark"], "is_shared", [], "any", false, false, false, 171)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 172
                    yield "                    (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("shared"), "html", null, true);
                    yield ")
                  ";
                }
                // line 174
                yield "                </option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['bookmark'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            yield "            </select>
          </div>

          <div class=\"form-check form-check-inline col-12\">
            <input class=\"form-check-input\" type=\"radio\" name=\"action_bookmark\" value=\"0\" id=\"radio_bookmark_exe\" checked>
            <label class=\"form-check-label\" for=\"radio_bookmark_exe\">";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Submit"), "html", null, true);
            yield "</label>
          </div>
          <div class=\"form-check form-check-inline col-12\">
            <input class=\"form-check-input\" type=\"radio\" name=\"action_bookmark\" value=\"1\" id=\"radio_bookmark_view\">
            <label class=\"form-check-label\" for=\"radio_bookmark_view\">";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("View only"), "html", null, true);
            yield "</label>
          </div>
          <div class=\"form-check form-check-inline col-12\">
            <input class=\"form-check-input\" type=\"radio\" name=\"action_bookmark\" value=\"2\" id=\"radio_bookmark_del\">
            <label class=\"form-check-label\" for=\"radio_bookmark_del\">";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Delete"), "html", null, true);
            yield "</label>
          </div>
        </div>

        <div class=\"hide\">
          ";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Variables"), "html", null, true);
            yield "
          ";
            // line 195
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faqbookmark");
            yield "
          <div class=\"row row-cols-auto\" id=\"bookmarkVariables\"></div>
        </div>
      </div>

      <div class=\"card-footer text-end\">
        <input class=\"btn btn-secondary\" type=\"submit\" name=\"SQL\" id=\"button_submit_bookmark\" value=\"";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
            yield "\">
      </div>
    </div>
  ";
        }
        // line 205
        yield "
  ";
        // line 206
        if ((($tmp = (isset($context["can_convert_kanji"]) || array_key_exists("can_convert_kanji", $context) ? $context["can_convert_kanji"] : (function () { throw new RuntimeError('Variable "can_convert_kanji" does not exist.', 206, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 207
            yield "    <div class=\"card mb-3\">
      <div class=\"card-body\">
        ";
            // line 209
            yield from $this->load("encoding/kanji_encoding_form.twig", 209)->unwrap()->yield($context);
            // line 210
            yield "      </div>
    </div>
  ";
        }
        // line 213
        yield "</form>

<div id=\"sqlqueryresultsouter\"></div>

<div class=\"modal fade\" id=\"simulateDmlModal\" tabindex=\"-1\" aria-labelledby=\"simulateDmlModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"simulateDmlModalLabel\">";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Simulate query"), "html", null, true);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "\"></button>
      </div>
      <div class=\"modal-body\">
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "</button>
      </div>
    </div>
  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sql/query.twig";
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
        return array (  484 => 227,  476 => 222,  472 => 221,  462 => 213,  457 => 210,  455 => 209,  451 => 207,  449 => 206,  446 => 205,  439 => 201,  430 => 195,  426 => 194,  418 => 189,  411 => 185,  404 => 181,  397 => 176,  390 => 174,  384 => 172,  382 => 171,  378 => 170,  371 => 169,  367 => 168,  359 => 163,  352 => 159,  349 => 158,  347 => 157,  344 => 156,  335 => 150,  327 => 145,  323 => 144,  313 => 137,  303 => 130,  299 => 129,  290 => 122,  280 => 115,  276 => 114,  272 => 113,  265 => 108,  257 => 103,  251 => 99,  244 => 95,  239 => 92,  237 => 91,  228 => 85,  224 => 83,  222 => 82,  217 => 79,  211 => 76,  206 => 75,  201 => 71,  192 => 68,  188 => 67,  184 => 66,  180 => 65,  176 => 64,  172 => 63,  168 => 61,  166 => 60,  156 => 53,  149 => 52,  139 => 45,  135 => 43,  130 => 41,  125 => 40,  123 => 39,  119 => 38,  115 => 36,  105 => 28,  103 => 27,  96 => 22,  94 => 21,  85 => 20,  76 => 14,  71 => 11,  69 => 10,  64 => 8,  60 => 7,  56 => 6,  50 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form method=\"post\" action=\"{{ url('/import') }}\" class=\"ajax lock-page\" id=\"sqlqueryform\" name=\"sqlform\"
  {{- is_upload ? ' enctype=\"multipart/form-data\"' }}>
  {{ get_hidden_inputs(db, table) }}
  <input type=\"hidden\" name=\"is_js_confirmed\" value=\"0\">
  <input type=\"hidden\" name=\"pos\" value=\"0\">
  <input type=\"hidden\" name=\"goto\" value=\"{{ goto }}\">
  <input type=\"hidden\" name=\"message_to_show\" value=\"{{ t('Your SQL query has been executed successfully.') }}\">
  <input type=\"hidden\" name=\"prev_sql_query\" value=\"{{ query }}\">

  {% if display_tab == 'full' or display_tab == 'sql' %}
    <a id=\"querybox\"></a>

    <div class=\"card mb-3\">
      <div class=\"card-header\">{{ legend|raw }}</div>
      <div class=\"card-body\">
        <div id=\"queryfieldscontainer\">
          <div class=\"row\">
            <div class=\"col\">
              <div class=\"mb-3\">
                <textarea class=\"form-control\" tabindex=\"100\" name=\"sql_query\" id=\"sqlquery\" cols=\"{{ textarea_cols }}\" rows=\"{{ textarea_rows }}\" data-textarea-auto-select=\"{{ textarea_auto_select ? \"true\" : \"false\" }}\" aria-label=\"{{ t('SQL query') }}\">
                  {{- query -}}
                </textarea>
              </div>
              <div id=\"querymessage\"></div>

              <div class=\"btn-toolbar\" role=\"toolbar\">
                {% if columns_list is not empty %}
                  <div class=\"btn-group me-2\" role=\"group\">
                    <input type=\"button\" value=\"SELECT *\" id=\"selectall\" class=\"btn btn-secondary button sqlbutton\">
                    <input type=\"button\" value=\"SELECT\" id=\"select\" class=\"btn btn-secondary button sqlbutton\">
                    <input type=\"button\" value=\"INSERT\" id=\"insert\" class=\"btn btn-secondary button sqlbutton\">
                    <input type=\"button\" value=\"UPDATE\" id=\"update\" class=\"btn btn-secondary button sqlbutton\">
                    <input type=\"button\" value=\"DELETE\" id=\"delete\" class=\"btn btn-secondary button sqlbutton\">
                  </div>
                {% endif %}

                <div class=\"btn-group me-2\" role=\"group\">
                  <input type=\"button\" value=\"{{ t('Clear') }}\" id=\"clear\" class=\"btn btn-secondary button sqlbutton\">
                  {% if codemirror_enable %}
                    <input type=\"button\" value=\"{{ t('Format') }}\" id=\"format\" class=\"btn btn-secondary button sqlbutton\">
                    <input type=\"button\" value=\"{{ t('Format as a single line') }}\" id=\"formatSingleLine\" class=\"btn btn-secondary button sqlbutton\">
                  {% endif %}
                </div>

                <input type=\"button\" value=\"{{ t('Get auto-saved query') }}\" id=\"saved\" class=\"btn btn-secondary button sqlbutton\">
              </div>

              <div class=\"my-3\">
                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"checkbox\" name=\"parameterized\" id=\"parameterized\">
                  <label class=\"form-check-label\" for=\"parameterized\">
                    {{ t('Bind parameters', notes = 'Bind parameters in the SQL query using :parameterName format') }}
                    {{ show_docu('faq', 'faq6-40') }}
                  </label>
                </div>
              </div>
              <div class=\"mb-3\" id=\"parametersDiv\"></div>
            </div>

            {% if columns_list is not empty %}
              <div class=\"col-xl-2 col-lg-3\">
                <div class=\"mb-3\">
                  <label class=\"visually-hidden\" for=\"fieldsSelect\">{{ t('Columns') }}</label>
                  <select class=\"form-select resize-vertical\" id=\"fieldsSelect\" name=\"dummy\" size=\"{{ textarea_rows }}\" multiple>
                    {% for field in columns_list %}
                      <option value=\"{{ backquote(field.field) }}\"
                        {{- field.field|length > 0 ? ' title=\"' ~ field.comment ~ '\"' }}>
                        {{ field.field }}
                      </option>
                    {% endfor %}
                  </select>
                </div>

                <input type=\"button\" class=\"btn btn-secondary button\" id=\"insertBtn\" name=\"insert\" value=\"
                    {%- if show_icons('ActionLinksMode') %}{{ '<<' }}\" title=\"{% endif -%}
                    {{- t('Insert') }}\">
              </div>
            {% endif %}
          </div>
        </div>

        {% if has_bookmark %}
          <div class=\"row row-cols-lg-auto g-3 align-items-center\">
            <div class=\"col-6\">
              <label class=\"form-label\" for=\"bkm_label\">{{ t('Bookmark this SQL query:') }}</label>
            </div>
            <div class=\"col-6\">
              <input class=\"form-control\" type=\"text\" name=\"bkm_label\" id=\"bkm_label\" tabindex=\"110\" value=\"\">
            </div>

            {% if allow_shared_bookmarks %}
              <div class=\"col-12\">
                <div class=\"form-check form-check-inline\">
                  <input class=\"form-check-input\" type=\"checkbox\" name=\"bkm_all_users\" tabindex=\"111\" id=\"id_bkm_all_users\" value=\"true\">
                  <label class=\"form-check-label\" for=\"id_bkm_all_users\">{{ t('Let every user access this bookmark') }}</label>
                </div>
              </div>
            {% endif %}

            <div class=\"col-12\">
              <div class=\"form-check form-check-inline\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"bkm_replace\" tabindex=\"112\" id=\"id_bkm_replace\" value=\"true\">
                <label class=\"form-check-label\" for=\"id_bkm_replace\">{{ t('Replace existing bookmark of same name') }}</label>
              </div>
            </div>
          </div>
        {% endif %}
      </div>
      <div class=\"card-footer\">
        <div class=\"row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-12\">
            <div class=\"input-group me-2\">
              <span class=\"input-group-text\">{{ t('Delimiter') }}</span>
              <label class=\"visually-hidden\" for=\"id_sql_delimiter\">{{ t('Delimiter') }}</label>
              <input class=\"form-control\" type=\"text\" name=\"sql_delimiter\" tabindex=\"131\" size=\"3\" value=\"{{ delimiter }}\" id=\"id_sql_delimiter\">
            </div>
          </div>

          <div class=\"col-12\">
            <div class=\"form-check form-check-inline\">
              <input class=\"form-check-input\" type=\"checkbox\" name=\"show_query\" value=\"1\" id=\"checkbox_show_query\" tabindex=\"132\">
              <label class=\"form-check-label\" for=\"checkbox_show_query\">{{ t('Show this query here again') }}</label>
            </div>
          </div>

          <div class=\"col-12\">
            <div class=\"form-check form-check-inline\">
              <input class=\"form-check-input\" type=\"checkbox\" name=\"retain_query_box\" value=\"1\" id=\"retain_query_box\" tabindex=\"133\"
                {{- retain_query_box ? ' checked' }}>
              <label class=\"form-check-label\" for=\"retain_query_box\">{{ t('Retain query box') }}</label>
            </div>
          </div>

          <div class=\"col-12\">
            <div class=\"form-check form-check-inline\">
              <input class=\"form-check-input\" type=\"checkbox\" name=\"rollback_query\" value=\"1\" id=\"rollback_query\" tabindex=\"134\">
              <label class=\"form-check-label\" for=\"rollback_query\">{{ t('Rollback when finished') }}</label>
            </div>
          </div>

          <div class=\"col-12\">
            <div class=\"form-check\">
              <input type=\"hidden\" name=\"fk_checks\" value=\"0\">
              <input class=\"form-check-input\" type=\"checkbox\" name=\"fk_checks\" id=\"fk_checks\" value=\"1\"{{ is_foreign_key_check ? ' checked' }}>
              <label class=\"form-check-label\" for=\"fk_checks\">{{ t('Enable foreign key checks') }}</label>
            </div>
          </div>

          <div class=\"col-12\">
            <input class=\"btn btn-primary ms-1\" type=\"submit\" id=\"button_submit_query\" name=\"SQL\" tabindex=\"200\" value=\"{{ t('Go') }}\">
          </div>
        </div>
      </div>
    </div>
  {% endif %}

  {% if display_tab == 'full' and bookmarks is not empty %}
    <div class=\"card mb-3\">
      <div class=\"card-header\">{{ t('Bookmarked SQL query') }}</div>
      <div class=\"card-body\">
        <div class=\"row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-6\">
            <label class=\"form-label\" for=\"id_bookmark\">{{ t('Bookmark:') }}</label>
          </div>
          <div class=\"col-6\">
            <select class=\"form-select\" name=\"id_bookmark\" id=\"id_bookmark\">
              <option value=\"\">&nbsp;</option>
              {% for bookmark in bookmarks %}
                <option value=\"{{ bookmark.id }}\" data-varcount=\"{{ bookmark.variable_count }}\">
                  {{ bookmark.label }}
                  {% if bookmark.is_shared %}
                    ({{ t('shared') }})
                  {% endif %}
                </option>
              {% endfor %}
            </select>
          </div>

          <div class=\"form-check form-check-inline col-12\">
            <input class=\"form-check-input\" type=\"radio\" name=\"action_bookmark\" value=\"0\" id=\"radio_bookmark_exe\" checked>
            <label class=\"form-check-label\" for=\"radio_bookmark_exe\">{{ t('Submit') }}</label>
          </div>
          <div class=\"form-check form-check-inline col-12\">
            <input class=\"form-check-input\" type=\"radio\" name=\"action_bookmark\" value=\"1\" id=\"radio_bookmark_view\">
            <label class=\"form-check-label\" for=\"radio_bookmark_view\">{{ t('View only') }}</label>
          </div>
          <div class=\"form-check form-check-inline col-12\">
            <input class=\"form-check-input\" type=\"radio\" name=\"action_bookmark\" value=\"2\" id=\"radio_bookmark_del\">
            <label class=\"form-check-label\" for=\"radio_bookmark_del\">{{ t('Delete') }}</label>
          </div>
        </div>

        <div class=\"hide\">
          {{ t('Variables') }}
          {{ show_docu('faq', 'faqbookmark') }}
          <div class=\"row row-cols-auto\" id=\"bookmarkVariables\"></div>
        </div>
      </div>

      <div class=\"card-footer text-end\">
        <input class=\"btn btn-secondary\" type=\"submit\" name=\"SQL\" id=\"button_submit_bookmark\" value=\"{{ t('Go') }}\">
      </div>
    </div>
  {% endif %}

  {% if can_convert_kanji %}
    <div class=\"card mb-3\">
      <div class=\"card-body\">
        {% include 'encoding/kanji_encoding_form.twig' %}
      </div>
    </div>
  {% endif %}
</form>

<div id=\"sqlqueryresultsouter\"></div>

<div class=\"modal fade\" id=\"simulateDmlModal\" tabindex=\"-1\" aria-labelledby=\"simulateDmlModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"simulateDmlModalLabel\">{{ t('Simulate query') }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{{ t('Close') }}\"></button>
      </div>
      <div class=\"modal-body\">
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">{{ t('Close') }}</button>
      </div>
    </div>
  </div>
</div>
", "sql/query.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/sql/query.twig");
    }
}

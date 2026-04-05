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

/* export.twig */
class __TwigTemplate_ccf9c939c27aec3186e918242ca2c9fc extends Template
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
            'title' => [$this, 'block_title'],
            'message' => [$this, 'block_message'],
            'selection_options' => [$this, 'block_selection_options'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"container\">
  <h2 class=\"my-3\">
    ";
        // line 3
        yield PhpMyAdmin\Html\Generator::getImage("b_export", \_gettext("Export"));
        yield "
    ";
        // line 4
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 5
        yield "  </h2>

  ";
        // line 7
        yield (isset($context["page_settings_error_html"]) || array_key_exists("page_settings_error_html", $context) ? $context["page_settings_error_html"] : (function () { throw new RuntimeError('Variable "page_settings_error_html" does not exist.', 7, $this->source); })());
        yield "
  ";
        // line 8
        yield (isset($context["page_settings_html"]) || array_key_exists("page_settings_html", $context) ? $context["page_settings_html"] : (function () { throw new RuntimeError('Variable "page_settings_html" does not exist.', 8, $this->source); })());
        yield "

  ";
        // line 10
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/flash_messages.twig", [], false);
        yield "

  ";
        // line 12
        yield from $this->unwrap()->yieldBlock('message', $context, $blocks);
        // line 13
        yield "
  ";
        // line 14
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["templates"]) || array_key_exists("templates", $context) ? $context["templates"] : (function () { throw new RuntimeError('Variable "templates" does not exist.', 14, $this->source); })()), "is_enabled", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "    <div class=\"card mb-3\">
      <div class=\"card-header\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Export templates:"), "html", null, true);
            yield "</div>
      <div class=\"card-body row gy-3\">
        <form method=\"post\" action=\"";
            // line 18
            yield PhpMyAdmin\Url::getFromRoute("/export/template/create");
            yield "\" class=\"col-12 col-md disableAjax\">
          <fieldset>
            <legend>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("New template:"), "html", null, true);
            yield "</legend>
            <div class=\"row g-3 align-items-center\">
              <div class=\"col-auto\">
                <label for=\"templateName\" class=\"col-form-label\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Template name"), "html", null, true);
            yield "</label>
              </div>
              <div class=\"col-auto\">
                <input class=\"form-control\" type=\"text\" name=\"templateName\" id=\"templateName\" maxlength=\"64\" placeholder=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Template name"), "html", null, true);
            yield "\" required>
              </div>
              <div class=\"col-auto\">
                <input class=\"btn btn-secondary\" type=\"submit\" name=\"createTemplate\" id=\"createTemplate\" value=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Create"), "html", null, true);
            yield "\">
              </div>
            </div>
          </fieldset>
        </form>

        <form method=\"post\" id=\"existingTemplatesForm\" class=\"col-12 col-md disableAjax\">
          <fieldset>
            <legend>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Existing templates:"), "html", null, true);
            yield "</legend>
            <div class=\"row g-3 align-items-center\">
              <div class=\"col-auto\">
                <label for=\"template\" class=\"col-form-label\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Template:"), "html", null, true);
            yield "</label>
              </div>
              <div class=\"col-auto\">
                <select class=\"form-select\" name=\"template\" id=\"template\" required>
                  <option value=\"\">-- ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Select a template"), "html", null, true);
            yield " --</option>
                  ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["templates"]) || array_key_exists("templates", $context) ? $context["templates"] : (function () { throw new RuntimeError('Variable "templates" does not exist.', 45, $this->source); })()), "templates", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
                // line 46
                yield "                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["template"], "getId", [], "method", false, false, false, 46), "html", null, true);
                yield "\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["template"], "getId", [], "method", false, false, false, 46) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["templates"]) || array_key_exists("templates", $context) ? $context["templates"] : (function () { throw new RuntimeError('Variable "templates" does not exist.', 46, $this->source); })()), "selected", [], "any", false, false, false, 46))) ? (" selected") : (""));
                yield ">
                      ";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["template"], "getName", [], "method", false, false, false, 47), "html", null, true);
                yield "
                    </option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['template'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            yield "                </select>
              </div>
              <div class=\"col-auto\">
                <input class=\"btn btn-secondary\" type=\"submit\" formaction=\"";
            // line 53
            yield PhpMyAdmin\Url::getFromRoute("/export/template/update");
            yield "\" name=\"updateTemplate\" id=\"updateTemplate\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Update"), "html", null, true);
            yield "\">
              </div>
              <div class=\"col-auto\">
                <input class=\"btn btn-secondary\" type=\"submit\" formaction=\"";
            // line 56
            yield PhpMyAdmin\Url::getFromRoute("/export/template/delete");
            yield "\" name=\"deleteTemplate\" id=\"deleteTemplate\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Delete"), "html", null, true);
            yield "\">
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  ";
        }
        // line 64
        yield "
  ";
        // line 65
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["sql_query"]) || array_key_exists("sql_query", $context) ? $context["sql_query"] : (function () { throw new RuntimeError('Variable "sql_query" does not exist.', 65, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "    <div class=\"card mb-3\">
      <div class=\"card-header\">
        ";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(
// l10n: Title of the option on the Export page
\_gettext("SQL query:")
, "html", null, true);
            yield "
      </div>
      <div class=\"card-body\">
        <div id=\"sqlqueryform\">
          <input class=\"btn btn-secondary\" type=\"submit\" id=\"showsqlquery\" value=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(
// l10n: Button to show the SQL query on the export page
\_gettext("Show SQL query")
, "html", null, true);
            yield "\">
        </div>
        <div class=\"d-none\"></div>
      </div>
    </div>
    <div class=\"modal fade\" id=\"showSqlQueryModal\" tabindex=\"-1\" aria-labelledby=\"showSqlQueryModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"showSqlQueryModalLabel\">";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Loading"), "html", null, true);
            yield "</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
            yield "\"></button>
          </div>
          <div class=\"modal-body\">
            <div id=\"export_sql_modal_content\">
              <code class=\"sql\">
                <pre id=\"sql_preview_query\">";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sql_query"]) || array_key_exists("sql_query", $context) ? $context["sql_query"] : (function () { throw new RuntimeError('Variable "sql_query" does not exist.', 87, $this->source); })()), "html", null, true);
            yield "</pre>
              </code>
            </div>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
            yield "</button>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 98
        yield "
  <form method=\"post\" action=\"";
        // line 99
        yield PhpMyAdmin\Url::getFromRoute("/export");
        yield "\" name=\"dump\" class=\"disableAjax\">
    ";
        // line 100
        yield PhpMyAdmin\Url::getHiddenInputs((isset($context["hidden_inputs"]) || array_key_exists("hidden_inputs", $context) ? $context["hidden_inputs"] : (function () { throw new RuntimeError('Variable "hidden_inputs" does not exist.', 100, $this->source); })()));
        yield "

    ";
        // line 102
        if (((isset($context["export_method"]) || array_key_exists("export_method", $context) ? $context["export_method"] : (function () { throw new RuntimeError('Variable "export_method" does not exist.', 102, $this->source); })()) != "custom-no-form")) {
            // line 103
            yield "      <div class=\"card mb-3\" id=\"quick_or_custom\">
        <div class=\"card-header\">";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Export method:"), "html", null, true);
            yield "</div>
        <div class=\"card-body\">
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"quick_or_custom\" value=\"quick\" id=\"radio_quick_export\"";
            // line 107
            yield ((((isset($context["export_method"]) || array_key_exists("export_method", $context) ? $context["export_method"] : (function () { throw new RuntimeError('Variable "export_method" does not exist.', 107, $this->source); })()) == "quick")) ? (" checked") : (""));
            yield ">
            <label class=\"form-check-label\" for=\"radio_quick_export\">";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Quick - display only the minimal options"), "html", null, true);
            yield "</label>
          </div>
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"quick_or_custom\" value=\"custom\" id=\"radio_custom_export\"";
            // line 111
            yield ((((isset($context["export_method"]) || array_key_exists("export_method", $context) ? $context["export_method"] : (function () { throw new RuntimeError('Variable "export_method" does not exist.', 111, $this->source); })()) == "custom")) ? (" checked") : (""));
            yield ">
            <label class=\"form-check-label\" for=\"radio_custom_export\">";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Custom - display all possible options"), "html", null, true);
            yield "</label>
          </div>
        </div>
      </div>
    ";
        }
        // line 117
        yield "
    <div class=\"card mb-3\" id=\"format\">
      <div class=\"card-header\">";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Format:"), "html", null, true);
        yield "</div>
      <div class=\"card-body\">
        <select class=\"form-select\" id=\"plugins\" name=\"what\" aria-label=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("File format to export"), "html", null, true);
        yield "\">
          ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["plugins_choice"]) || array_key_exists("plugins_choice", $context) ? $context["plugins_choice"] : (function () { throw new RuntimeError('Variable "plugins_choice" does not exist.', 122, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 123
            yield "            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 123), "html", null, true);
            yield "\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "is_selected", [], "any", false, false, false, 123)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected") : (""));
            yield " data-is-binary=\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "is_binary", [], "any", false, false, false, 123)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "text", [], "any", false, false, false, 123), "html", null, true);
            yield "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        yield "        </select>
      </div>
    </div>

    ";
        // line 129
        yield from $this->unwrap()->yieldBlock('selection_options', $context, $blocks);
        // line 130
        yield "
    ";
        // line 131
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 131, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 132
            yield "      <div class=\"card mb-3 d-none\" id=\"rows\">
        <div class=\"card-header\">";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Rows:"), "html", null, true);
            yield "</div>
        <div class=\"card-body\">
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"allrows\" value=\"1\" id=\"radio_allrows_1\"";
            // line 136
            yield ((((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 136, $this->source); })()), "allrows", [], "any", false, false, false, 136)) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 136, $this->source); })()), "allrows", [], "any", false, false, false, 136) == 1))) ? (" checked") : (""));
            yield ">
            <label class=\"form-check-label\" for=\"radio_allrows_1\">";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Dump all rows"), "html", null, true);
            yield "</label>
          </div>
          <div class=\"form-check mb-2\">
            <input class=\"form-check-input\" type=\"radio\" name=\"allrows\" value=\"0\" id=\"radio_allrows_0\"";
            // line 140
            yield ((( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 140, $this->source); })()), "allrows", [], "any", false, false, false, 140)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 140, $this->source); })()), "allrows", [], "any", false, false, false, 140) == 0))) ? (" checked") : (""));
            yield ">
            <label class=\"form-check-label\" for=\"radio_allrows_0\">";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Dump some row(s)"), "html", null, true);
            yield "</label>
          </div>
          <ul class=\"list-group\">
            <li class=\"list-group-item\">
              <label class=\"form-label\" for=\"limit_to\">";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Number of rows:"), "html", null, true);
            yield "</label>
              <input class=\"form-control\" type=\"text\" id=\"limit_to\" name=\"limit_to\" size=\"5\" value=\"";
            // line 147
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 147, $this->source); })()), "limit_to", [], "any", false, false, false, 147))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 148, $this->source); })()), "limit_to", [], "any", false, false, false, 148), "html", null, true);
            } elseif (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,             // line 149
(isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 149, $this->source); })()), "unlim_num_rows", [], "any", false, false, false, 149)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 149, $this->source); })()), "unlim_num_rows", [], "any", false, false, false, 149) != 0))) {
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 150, $this->source); })()), "unlim_num_rows", [], "any", false, false, false, 150), "html", null, true);
            } else {
                // line 152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 152, $this->source); })()), "number_of_rows", [], "any", false, false, false, 152), "html", null, true);
            }
            // line 153
            yield "\" onfocus=\"this.select()\">
            </li>
            <li class=\"list-group-item\">
              <label class=\"form-label\" for=\"limit_from\">";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Row to begin at:"), "html", null, true);
            yield "</label>
              <input class=\"form-control\" type=\"text\" id=\"limit_from\" name=\"limit_from\" size=\"5\" value=\"";
            // line 157
            yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 157, $this->source); })()), "limit_from", [], "any", false, false, false, 157))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 157, $this->source); })()), "limit_from", [], "any", false, false, false, 157), "html", null, true)) : (0));
            yield "\" onfocus=\"this.select()\">
            </li>
          </ul>
        </div>
      </div>
    ";
        }
        // line 163
        yield "
    ";
        // line 164
        if ((($tmp = (isset($context["has_save_dir"]) || array_key_exists("has_save_dir", $context) ? $context["has_save_dir"] : (function () { throw new RuntimeError('Variable "has_save_dir" does not exist.', 164, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 165
            yield "      <div class=\"card mb-3 d-none\" id=\"output_quick_export\">
        <div class=\"card-header\">";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Output:"), "html", null, true);
            yield "</div>
        <div class=\"card-body\">
          <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"quick_export_onserver\" value=\"saveit\" id=\"checkbox_quick_dump_onserver\"";
            // line 169
            yield (((($tmp = (isset($context["export_is_checked"]) || array_key_exists("export_is_checked", $context) ? $context["export_is_checked"] : (function () { throw new RuntimeError('Variable "export_is_checked" does not exist.', 169, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
            yield ">
            <label class=\"form-check-label\" for=\"checkbox_quick_dump_onserver\">
              ";
            // line 171
            yield Twig\Extension\CoreExtension::sprintf(\_gettext("Save on server in the directory <strong>%s</strong>"), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["save_dir"]) || array_key_exists("save_dir", $context) ? $context["save_dir"] : (function () { throw new RuntimeError('Variable "save_dir" does not exist.', 171, $this->source); })())));
            yield "
            </label>
          </div>
          <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"quick_export_onserver_overwrite\" value=\"saveitover\" id=\"checkbox_quick_dump_onserver_overwrite\"";
            // line 176
            yield (((($tmp = (isset($context["export_overwrite_is_checked"]) || array_key_exists("export_overwrite_is_checked", $context) ? $context["export_overwrite_is_checked"] : (function () { throw new RuntimeError('Variable "export_overwrite_is_checked" does not exist.', 176, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
            yield ">
            <label class=\"form-check-label\" for=\"checkbox_quick_dump_onserver_overwrite\">
              ";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Overwrite existing file(s)"), "html", null, true);
            yield "
            </label>
          </div>
        </div>
      </div>
    ";
        }
        // line 184
        yield "
    <div class=\"modal fade\" id=\"renameExportModal\" tabindex=\"-1\" aria-labelledby=\"renameExportModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog modal-xl\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"renameExportModalLabel\">";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Rename exported databases/tables/columns"), "html", null, true);
        yield "</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "\"></button>
          </div>
          <div class=\"modal-body overflow-auto\">
            <table class=\"table align-middle mb-3\" id=\"alias_data\">
              <thead>
                <tr>
                  <th colspan=\"4\">
                    ";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Defined aliases"), "html", null, true);
        yield "
                  </th>
                </tr>
              </thead>

              <tbody>
                ";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["aliases"]) || array_key_exists("aliases", $context) ? $context["aliases"] : (function () { throw new RuntimeError('Variable "aliases" does not exist.', 203, $this->source); })()));
        foreach ($context['_seq'] as $context["db"] => $context["db_data"]) {
            // line 204
            yield "                  ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["db_data"], "alias", [], "any", true, true, false, 204) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["db_data"], "alias", [], "any", false, false, false, 204)))) {
                // line 205
                yield "                    <tr>
                      <th>";
                // line 206
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Alias", "Database"), "html", null, true);
                yield "</th>
                      <td>";
                // line 207
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["db"], "html", null, true);
                yield "</td>
                      <td>
                        <input name=\"aliases[";
                // line 209
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["db"], "html", null, true);
                yield "][alias]\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["db_data"], "alias", [], "any", false, false, false, 209), "html", null, true);
                yield "\" type=\"text\">
                      </td>
                      <td>
                        <button class=\"alias_remove btn btn-secondary\">";
                // line 212
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Remove"), "html", null, true);
                yield "</button>
                      </td>
                    </tr>
                  ";
            }
            // line 216
            yield "
                  ";
            // line 217
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, $context["db_data"], "tables", [], "any", true, true, false, 217) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["db_data"], "tables", [], "any", false, false, false, 217)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["db_data"], "tables", [], "any", false, false, false, 217)) : ([])));
            foreach ($context['_seq'] as $context["table"] => $context["table_data"]) {
                // line 218
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["table_data"], "alias", [], "any", true, true, false, 218) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["table_data"], "alias", [], "any", false, false, false, 218)))) {
                    // line 219
                    yield "                      <tr>
                        <th>";
                    // line 220
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Alias", "Table"), "html", null, true);
                    yield "</th>
                        <td>";
                    // line 221
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["db"], "html", null, true);
                    yield ".";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["table"], "html", null, true);
                    yield "</td>
                        <td>
                          <input name=\"aliases[";
                    // line 223
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["db"], "html", null, true);
                    yield "][tables][";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["table"], "html", null, true);
                    yield "][alias]\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["table_data"], "alias", [], "any", false, false, false, 223), "html", null, true);
                    yield "\" type=\"text\">
                        </td>
                        <td>
                          <button class=\"alias_remove btn btn-secondary\">";
                    // line 226
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Remove"), "html", null, true);
                    yield "</button>
                        </td>
                      </tr>
                    ";
                }
                // line 230
                yield "
                    ";
                // line 231
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, $context["table_data"], "columns", [], "any", true, true, false, 231) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["table_data"], "columns", [], "any", false, false, false, 231)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["table_data"], "columns", [], "any", false, false, false, 231)) : ([])));
                foreach ($context['_seq'] as $context["column"] => $context["column_name"]) {
                    // line 232
                    yield "                      <tr>
                        <th>";
                    // line 233
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Alias", "Column"), "html", null, true);
                    yield "</th>
                        <td>";
                    // line 234
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["db"], "html", null, true);
                    yield ".";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["table"], "html", null, true);
                    yield ".";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["column"], "html", null, true);
                    yield "</td>
                        <td>
                          <input name=\"aliases[";
                    // line 236
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["db"], "html", null, true);
                    yield "][tables][";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["table"], "html", null, true);
                    yield "][colums][";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["column"], "html", null, true);
                    yield "]\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["column_name"], "html", null, true);
                    yield "\" type=\"text\">
                        </td>
                        <td>
                          <button class=\"alias_remove btn btn-secondary\">";
                    // line 239
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Remove"), "html", null, true);
                    yield "</button>
                        </td>
                      </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['column'], $context['column_name'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 243
                yield "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['table'], $context['table_data'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 244
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['db'], $context['db_data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 245
        yield "              </tbody>

              ";
        // line 248
        yield "              <tfoot class=\"hide\">
                <tr>
                  <th></th>
                  <td></td>
                  <td>
                    <input name=\"aliases_new\" value=\"\" type=\"text\">
                  </td>
                  <td>
                    <button class=\"alias_remove btn btn-secondary\">";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Remove"), "html", null, true);
        yield "</button>
                  </td>
                </tr>
              </tfoot>
            </table>

            <table class=\"table align-middle\">
              <thead>
                <tr>
                  <th colspan=\"4\">";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Define new aliases"), "html", null, true);
        yield "</th>
                </tr>
              </thead>
              <tr>
                <td>
                  <label>";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Select database:"), "html", null, true);
        yield "</label>
                </td>
                <td>
                  <select id=\"db_alias_select\">
                    <option value=\"\"></option>
                  </select>
                </td>
                <td>
                  <input id=\"db_alias_name\" placeholder=\"";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("New database name"), "html", null, true);
        yield "\" disabled=\"1\">
                </td>
                <td>
                  <button id=\"db_alias_button\" class=\"btn btn-secondary\" disabled=\"1\">";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add"), "html", null, true);
        yield "</button>
                </td>
              </tr>
              <tr>
                <td>
                  <label>";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Select table:"), "html", null, true);
        yield "</label>
                </td>
                <td>
                  <select id=\"table_alias_select\">
                    <option value=\"\"></option>
                  </select>
                </td>
                <td>
                  <input id=\"table_alias_name\" placeholder=\"";
        // line 294
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("New table name"), "html", null, true);
        yield "\" disabled=\"1\">
                </td>
                <td>
                  <button id=\"table_alias_button\" class=\"btn btn-secondary\" disabled=\"1\">";
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add"), "html", null, true);
        yield "</button>
                </td>
              </tr>
              <tr>
                <td>
                  <label>";
        // line 302
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Select column:"), "html", null, true);
        yield "</label>
                </td>
                <td>
                  <select id=\"column_alias_select\">
                    <option value=\"\"></option>
                  </select>
                </td>
                <td>
                  <input id=\"column_alias_name\" placeholder=\"";
        // line 310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("New column name"), "html", null, true);
        yield "\" disabled=\"1\">
                </td>
                <td>
                  <button id=\"column_alias_button\" class=\"btn btn-secondary\" disabled=\"1\">";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add"), "html", null, true);
        yield "</button>
                </td>
              </tr>
            </table>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" id=\"saveAndCloseBtn\" data-bs-dismiss=\"modal\">
              ";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Save & close"), "html", null, true);
        yield "
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class=\"card mb-3 d-none\" id=\"output\">
      <div class=\"card-header\">";
        // line 328
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Output:"), "html", null, true);
        yield "</div>
      <ul class=\"list-group list-group-flush\">
        <li class=\"list-group-item\">
          <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"btn_alias_config\"";
        // line 332
        yield (((($tmp = (isset($context["has_aliases"]) || array_key_exists("has_aliases", $context) ? $context["has_aliases"] : (function () { throw new RuntimeError('Variable "has_aliases" does not exist.', 332, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
        yield ">
            <label class=\"form-check-label\" for=\"btn_alias_config\">";
        // line 333
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Rename exported databases/tables/columns"), "html", null, true);
        yield "</label>
          </div>
        </li>

        ";
        // line 337
        if (((isset($context["export_type"]) || array_key_exists("export_type", $context) ? $context["export_type"] : (function () { throw new RuntimeError('Variable "export_type" does not exist.', 337, $this->source); })()) != "server")) {
            // line 338
            yield "          <li class=\"list-group-item\">
            <div class=\"form-check form-switch\">
              <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"lock_tables\" value=\"something\" id=\"checkbox_lock_tables\"";
            // line 341
            yield (((( !(isset($context["repopulate"]) || array_key_exists("repopulate", $context) ? $context["repopulate"] : (function () { throw new RuntimeError('Variable "repopulate" does not exist.', 341, $this->source); })()) && (isset($context["is_checked_lock_tables"]) || array_key_exists("is_checked_lock_tables", $context) ? $context["is_checked_lock_tables"] : (function () { throw new RuntimeError('Variable "is_checked_lock_tables" does not exist.', 341, $this->source); })())) || (isset($context["lock_tables"]) || array_key_exists("lock_tables", $context) ? $context["lock_tables"] : (function () { throw new RuntimeError('Variable "lock_tables" does not exist.', 341, $this->source); })()))) ? (" checked") : (""));
            yield ">
              <label class=\"form-check-label\" for=\"checkbox_lock_tables\">
                ";
            // line 343
            yield Twig\Extension\CoreExtension::sprintf(\_gettext("Use %s statement"), "<code>LOCK TABLES</code>");
            yield "
              </label>
            </div>
          </li>
        ";
        }
        // line 348
        yield "
        <li class=\"list-group-item\">
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" id=\"radio_view_as_text\" name=\"output_format\" value=\"astext\"";
        // line 351
        yield ((((isset($context["repopulate"]) || array_key_exists("repopulate", $context) ? $context["repopulate"] : (function () { throw new RuntimeError('Variable "repopulate" does not exist.', 351, $this->source); })()) || ((isset($context["export_asfile"]) || array_key_exists("export_asfile", $context) ? $context["export_asfile"] : (function () { throw new RuntimeError('Variable "export_asfile" does not exist.', 351, $this->source); })()) == false))) ? (" checked") : (""));
        yield ">
            <label class=\"form-check-label\" for=\"radio_view_as_text\">";
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("View output as text"), "html", null, true);
        yield "</label>
          </div>
          <div class=\"form-check mb-2\">
            <input class=\"form-check-input\" type=\"radio\" name=\"output_format\" value=\"sendit\" id=\"radio_dump_asfile\"";
        // line 355
        yield ((( !(isset($context["repopulate"]) || array_key_exists("repopulate", $context) ? $context["repopulate"] : (function () { throw new RuntimeError('Variable "repopulate" does not exist.', 355, $this->source); })()) && (isset($context["is_checked_asfile"]) || array_key_exists("is_checked_asfile", $context) ? $context["is_checked_asfile"] : (function () { throw new RuntimeError('Variable "is_checked_asfile" does not exist.', 355, $this->source); })()))) ? (" checked") : (""));
        yield ">
            <label class=\"form-check-label\" for=\"radio_dump_asfile\">";
        // line 356
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Save output to a file"), "html", null, true);
        yield "</label>
          </div>
          <div class=\"hstack gap-3\">
            <div class=\"vr\"></div>
            <ul class=\"list-group\" id=\"ul_save_asfile\">
              ";
        // line 361
        if ((($tmp = (isset($context["has_save_dir"]) || array_key_exists("has_save_dir", $context) ? $context["has_save_dir"] : (function () { throw new RuntimeError('Variable "has_save_dir" does not exist.', 361, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 362
            yield "                <li class=\"list-group-item\">
                  <div class=\"form-check form-switch\">
                    <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"onserver\" value=\"saveit\" id=\"checkbox_dump_onserver\"";
            // line 364
            yield (((($tmp = (isset($context["is_checked_export"]) || array_key_exists("is_checked_export", $context) ? $context["is_checked_export"] : (function () { throw new RuntimeError('Variable "is_checked_export" does not exist.', 364, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
            yield ">
                    <label class=\"form-check-label\" for=\"checkbox_dump_onserver\">
                      ";
            // line 366
            yield Twig\Extension\CoreExtension::sprintf(\_gettext("Save on server in the directory <strong>%s</strong>"), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["save_dir"]) || array_key_exists("save_dir", $context) ? $context["save_dir"] : (function () { throw new RuntimeError('Variable "save_dir" does not exist.', 366, $this->source); })())));
            yield "
                    </label>
                  </div>
                  <div class=\"form-check form-switch\">
                    <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"onserver_overwrite\" value=\"saveitover\" id=\"checkbox_dump_onserver_overwrite\"";
            // line 371
            yield (((($tmp = (isset($context["is_checked_export_overwrite"]) || array_key_exists("is_checked_export_overwrite", $context) ? $context["is_checked_export_overwrite"] : (function () { throw new RuntimeError('Variable "is_checked_export_overwrite" does not exist.', 371, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
            yield ">
                    <label class=\"form-check-label\" for=\"checkbox_dump_onserver_overwrite\">
                      ";
            // line 373
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Overwrite existing file(s)"), "html", null, true);
            yield "
                    </label>
                  </div>
                </li>
              ";
        }
        // line 378
        yield "
              <li class=\"list-group-item\">
                <div class=\"row g-3 align-items-center\">
                  <div class=\"col-auto\">
                    <label for=\"filename_template\" class=\"col-form-label\">
                      ";
        // line 383
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("File name template:"), "html", null, true);
        yield "
                      ";
        // line 384
        yield PhpMyAdmin\Html\Generator::showHint(Twig\Extension\CoreExtension::sprintf(\_gettext("This value is interpreted using the 'strftime' function, so you can use time formatting strings. Additionally the following transformations will happen: %s Other text will be kept as is. See the FAQ 6.27 for details."), (isset($context["filename_hint"]) || array_key_exists("filename_hint", $context) ? $context["filename_hint"] : (function () { throw new RuntimeError('Variable "filename_hint" does not exist.', 384, $this->source); })())));
        yield "
                    </label>
                  </div>
                  <div class=\"col-auto\">
                    <input type=\"text\" class=\"form-control\" name=\"filename_template\" id=\"filename_template\" value=\"";
        // line 388
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filename_template"]) || array_key_exists("filename_template", $context) ? $context["filename_template"] : (function () { throw new RuntimeError('Variable "filename_template" does not exist.', 388, $this->source); })()), "html", null, true);
        yield "\">
                  </div>
                  <div class=\"col-auto\">
                    <div class=\"form-check form-switch\">
                      <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"remember_template\" id=\"checkbox_remember_template\"";
        // line 392
        yield (((($tmp = (isset($context["is_checked_remember_file_template"]) || array_key_exists("is_checked_remember_file_template", $context) ? $context["is_checked_remember_file_template"] : (function () { throw new RuntimeError('Variable "is_checked_remember_file_template" does not exist.', 392, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
        yield ">
                      <label class=\"form-check-label\" for=\"checkbox_remember_template\">
                        ";
        // line 394
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Use this for future exports"), "html", null, true);
        yield "
                      </label>
                    </div>
                  </div>
                </div>
              </li>

              ";
        // line 401
        if ((($tmp = (isset($context["is_encoding_supported"]) || array_key_exists("is_encoding_supported", $context) ? $context["is_encoding_supported"] : (function () { throw new RuntimeError('Variable "is_encoding_supported" does not exist.', 401, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 402
            yield "                <li class=\"list-group-item\">
                  <div class=\"row\">
                    <div class=\"col-auto\">
                      <label for=\"select_charset\" class=\"col-form-label\">";
            // line 405
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Character set of the file:"), "html", null, true);
            yield "</label>
                    </div>
                    <div class=\"col-auto\">
                      <select class=\"form-select\" id=\"select_charset\" name=\"charset\">
                        ";
            // line 409
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["encodings"]) || array_key_exists("encodings", $context) ? $context["encodings"] : (function () { throw new RuntimeError('Variable "encodings" does not exist.', 409, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
                // line 410
                yield "                          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["charset"], "html", null, true);
                yield "\"";
                // line 411
                yield ((((Twig\Extension\CoreExtension::testEmpty((isset($context["export_charset"]) || array_key_exists("export_charset", $context) ? $context["export_charset"] : (function () { throw new RuntimeError('Variable "export_charset" does not exist.', 411, $this->source); })())) && ($context["charset"] == "utf-8")) || ($context["charset"] == (isset($context["export_charset"]) || array_key_exists("export_charset", $context) ? $context["export_charset"] : (function () { throw new RuntimeError('Variable "export_charset" does not exist.', 411, $this->source); })())))) ? (" selected") : (""));
                yield ">";
                // line 412
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["charset"], "html", null, true);
                // line 413
                yield "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['charset'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 415
            yield "                      </select>
                    </div>
                  </div>
                </li>
              ";
        }
        // line 420
        yield "
              ";
        // line 421
        if (((isset($context["has_zip"]) || array_key_exists("has_zip", $context) ? $context["has_zip"] : (function () { throw new RuntimeError('Variable "has_zip" does not exist.', 421, $this->source); })()) || (isset($context["has_gzip"]) || array_key_exists("has_gzip", $context) ? $context["has_gzip"] : (function () { throw new RuntimeError('Variable "has_gzip" does not exist.', 421, $this->source); })()))) {
            // line 422
            yield "                <li class=\"list-group-item\">
                  <div class=\"row\">
                    <div class=\"col-auto\">
                      <label for=\"compression\" class=\"col-form-label\">";
            // line 425
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Compression:"), "html", null, true);
            yield "</label>
                    </div>
                    <div class=\"col-auto\">
                      <select class=\"form-select\" id=\"compression\" name=\"compression\">
                        <option value=\"none\">";
            // line 429
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("None"), "html", null, true);
            yield "</option>
                        ";
            // line 430
            if ((($tmp = (isset($context["has_zip"]) || array_key_exists("has_zip", $context) ? $context["has_zip"] : (function () { throw new RuntimeError('Variable "has_zip" does not exist.', 430, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 431
                yield "                          <option value=\"zip\"";
                // line 432
                yield ((((isset($context["selected_compression"]) || array_key_exists("selected_compression", $context) ? $context["selected_compression"] : (function () { throw new RuntimeError('Variable "selected_compression" does not exist.', 432, $this->source); })()) == "zip")) ? (" selected") : (""));
                yield ">
                            ";
                // line 433
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("zipped"), "html", null, true);
                yield "
                          </option>
                        ";
            }
            // line 436
            yield "                        ";
            if ((($tmp = (isset($context["has_gzip"]) || array_key_exists("has_gzip", $context) ? $context["has_gzip"] : (function () { throw new RuntimeError('Variable "has_gzip" does not exist.', 436, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 437
                yield "                          <option value=\"gzip\"";
                // line 438
                yield ((((isset($context["selected_compression"]) || array_key_exists("selected_compression", $context) ? $context["selected_compression"] : (function () { throw new RuntimeError('Variable "selected_compression" does not exist.', 438, $this->source); })()) == "gzip")) ? (" selected") : (""));
                yield ">
                            ";
                // line 439
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("gzipped"), "html", null, true);
                yield "
                          </option>
                        ";
            }
            // line 442
            yield "                      </select>
                    </div>
                  </div>
                </li>
              ";
        } else {
            // line 447
            yield "                <input type=\"hidden\" name=\"compression\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selected_compression"]) || array_key_exists("selected_compression", $context) ? $context["selected_compression"] : (function () { throw new RuntimeError('Variable "selected_compression" does not exist.', 447, $this->source); })()), "html", null, true);
            yield "\">
              ";
        }
        // line 449
        yield "
              ";
        // line 450
        if ((((isset($context["export_type"]) || array_key_exists("export_type", $context) ? $context["export_type"] : (function () { throw new RuntimeError('Variable "export_type" does not exist.', 450, $this->source); })()) == "server") || ((isset($context["export_type"]) || array_key_exists("export_type", $context) ? $context["export_type"] : (function () { throw new RuntimeError('Variable "export_type" does not exist.', 450, $this->source); })()) == "database"))) {
            // line 451
            yield "                <li class=\"list-group-item\">
                  <div class=\"form-check form-switch\">
                    <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"checkbox_as_separate_files\" name=\"as_separate_files\" value=\"";
            // line 453
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["export_type"]) || array_key_exists("export_type", $context) ? $context["export_type"] : (function () { throw new RuntimeError('Variable "export_type" does not exist.', 453, $this->source); })()), "html", null, true);
            yield "\"";
            // line 454
            yield (((($tmp = (isset($context["is_checked_as_separate_files"]) || array_key_exists("is_checked_as_separate_files", $context) ? $context["is_checked_as_separate_files"] : (function () { throw new RuntimeError('Variable "is_checked_as_separate_files" does not exist.', 454, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
            yield ">
                    <label class=\"form-check-label\" for=\"checkbox_as_separate_files\">
                      ";
            // line 456
            if (((isset($context["export_type"]) || array_key_exists("export_type", $context) ? $context["export_type"] : (function () { throw new RuntimeError('Variable "export_type" does not exist.', 456, $this->source); })()) == "server")) {
                // line 457
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Export databases as separate files"), "html", null, true);
                yield "
                      ";
            } elseif ((            // line 458
(isset($context["export_type"]) || array_key_exists("export_type", $context) ? $context["export_type"] : (function () { throw new RuntimeError('Variable "export_type" does not exist.', 458, $this->source); })()) == "database")) {
                // line 459
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Export tables as separate files"), "html", null, true);
                yield "
                      ";
            }
            // line 461
            yield "                    </label>
                  </div>
                </li>
              ";
        }
        // line 465
        yield "            </ul>
          </div>
        </li>

        <li class=\"list-group-item\">
          <label for=\"maxsize\" class=\"form-label\">";
        // line 470
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Skip tables larger than:"), "html", null, true);
        yield "</label>
          <input class=\"form-control\" type=\"number\" id=\"maxsize\" name=\"maxsize\" aria-describedby=\"maxsizeHelp\">
          <div id=\"maxsizeHelp\" class=\"form-text\">";
        // line 472
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("The size is measured in MiB."), "html", null, true);
        yield "</div>
        </li>
      </ul>
    </div>

    <div class=\"card mb-3 d-none\" id=\"format_specific_opts\">
      <div class=\"card-header\">";
        // line 478
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Format-specific options:"), "html", null, true);
        yield "</div>
      <div class=\"card-body\">
        ";
        // line 480
        yield (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 480, $this->source); })());
        yield "
      </div>
    </div>

    ";
        // line 484
        if ((($tmp = (isset($context["can_convert_kanji"]) || array_key_exists("can_convert_kanji", $context) ? $context["can_convert_kanji"] : (function () { throw new RuntimeError('Variable "can_convert_kanji" does not exist.', 484, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 485
            yield "      ";
            // line 486
            yield "      <div class=\"card mb-3\" id=\"kanji_encoding\">
        <div class=\"card-header\">";
            // line 487
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Encoding Conversion:"), "html", null, true);
            yield "</div>
        <div class=\"card-body\">
          ";
            // line 489
            yield from $this->load("encoding/kanji_encoding_form.twig", 489)->unwrap()->yield($context);
            // line 490
            yield "        </div>
      </div>
    ";
        }
        // line 493
        yield "
    <div id=\"submit\">
      <input id=\"buttonGo\" class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 495
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Export"), "html", null, true);
        yield "\" data-exec-time-limit=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["exec_time_limit"]) || array_key_exists("exec_time_limit", $context) ? $context["exec_time_limit"] : (function () { throw new RuntimeError('Variable "exec_time_limit" does not exist.', 495, $this->source); })()), "html", null, true);
        yield "\">
    </div>
  </form>
</div>
";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_message(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 129
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_selection_options(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "export.twig";
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
        return array (  1091 => 129,  1081 => 12,  1071 => 4,  1059 => 495,  1055 => 493,  1050 => 490,  1048 => 489,  1043 => 487,  1040 => 486,  1038 => 485,  1036 => 484,  1029 => 480,  1024 => 478,  1015 => 472,  1010 => 470,  1003 => 465,  997 => 461,  991 => 459,  989 => 458,  984 => 457,  982 => 456,  977 => 454,  974 => 453,  970 => 451,  968 => 450,  965 => 449,  959 => 447,  952 => 442,  946 => 439,  942 => 438,  940 => 437,  937 => 436,  931 => 433,  927 => 432,  925 => 431,  923 => 430,  919 => 429,  912 => 425,  907 => 422,  905 => 421,  902 => 420,  895 => 415,  888 => 413,  886 => 412,  883 => 411,  879 => 410,  875 => 409,  868 => 405,  863 => 402,  861 => 401,  851 => 394,  846 => 392,  839 => 388,  832 => 384,  828 => 383,  821 => 378,  813 => 373,  808 => 371,  801 => 366,  796 => 364,  792 => 362,  790 => 361,  782 => 356,  778 => 355,  772 => 352,  768 => 351,  763 => 348,  755 => 343,  750 => 341,  746 => 338,  744 => 337,  737 => 333,  733 => 332,  726 => 328,  715 => 320,  705 => 313,  699 => 310,  688 => 302,  680 => 297,  674 => 294,  663 => 286,  655 => 281,  649 => 278,  638 => 270,  630 => 265,  618 => 256,  608 => 248,  604 => 245,  598 => 244,  592 => 243,  582 => 239,  570 => 236,  561 => 234,  557 => 233,  554 => 232,  550 => 231,  547 => 230,  540 => 226,  530 => 223,  523 => 221,  519 => 220,  516 => 219,  513 => 218,  509 => 217,  506 => 216,  499 => 212,  491 => 209,  486 => 207,  482 => 206,  479 => 205,  476 => 204,  472 => 203,  463 => 197,  453 => 190,  449 => 189,  442 => 184,  433 => 178,  428 => 176,  421 => 171,  416 => 169,  410 => 166,  407 => 165,  405 => 164,  402 => 163,  393 => 157,  389 => 156,  384 => 153,  381 => 152,  378 => 150,  376 => 149,  374 => 148,  372 => 147,  368 => 145,  361 => 141,  357 => 140,  351 => 137,  347 => 136,  341 => 133,  338 => 132,  336 => 131,  333 => 130,  331 => 129,  325 => 125,  310 => 123,  306 => 122,  302 => 121,  297 => 119,  293 => 117,  285 => 112,  281 => 111,  275 => 108,  271 => 107,  265 => 104,  262 => 103,  260 => 102,  255 => 100,  251 => 99,  248 => 98,  239 => 92,  231 => 87,  223 => 82,  219 => 81,  204 => 72,  194 => 68,  190 => 66,  188 => 65,  185 => 64,  172 => 56,  164 => 53,  159 => 50,  150 => 47,  143 => 46,  139 => 45,  135 => 44,  128 => 40,  122 => 37,  111 => 29,  105 => 26,  99 => 23,  93 => 20,  88 => 18,  83 => 16,  80 => 15,  78 => 14,  75 => 13,  73 => 12,  68 => 10,  63 => 8,  59 => 7,  55 => 5,  53 => 4,  49 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container\">
  <h2 class=\"my-3\">
    {{ get_image('b_export', t('Export')) }}
    {% block title %}{% endblock %}
  </h2>

  {{ page_settings_error_html|raw }}
  {{ page_settings_html|raw }}

  {{ include('components/flash_messages.twig', with_context = false) }}

  {% block message %}{% endblock %}

  {% if templates.is_enabled %}
    <div class=\"card mb-3\">
      <div class=\"card-header\">{{ t('Export templates:') }}</div>
      <div class=\"card-body row gy-3\">
        <form method=\"post\" action=\"{{ url('/export/template/create') }}\" class=\"col-12 col-md disableAjax\">
          <fieldset>
            <legend>{{ t('New template:') }}</legend>
            <div class=\"row g-3 align-items-center\">
              <div class=\"col-auto\">
                <label for=\"templateName\" class=\"col-form-label\">{{ t('Template name') }}</label>
              </div>
              <div class=\"col-auto\">
                <input class=\"form-control\" type=\"text\" name=\"templateName\" id=\"templateName\" maxlength=\"64\" placeholder=\"{{ t('Template name') }}\" required>
              </div>
              <div class=\"col-auto\">
                <input class=\"btn btn-secondary\" type=\"submit\" name=\"createTemplate\" id=\"createTemplate\" value=\"{{ t('Create') }}\">
              </div>
            </div>
          </fieldset>
        </form>

        <form method=\"post\" id=\"existingTemplatesForm\" class=\"col-12 col-md disableAjax\">
          <fieldset>
            <legend>{{ t('Existing templates:') }}</legend>
            <div class=\"row g-3 align-items-center\">
              <div class=\"col-auto\">
                <label for=\"template\" class=\"col-form-label\">{{ t('Template:') }}</label>
              </div>
              <div class=\"col-auto\">
                <select class=\"form-select\" name=\"template\" id=\"template\" required>
                  <option value=\"\">-- {{ t('Select a template') }} --</option>
                  {% for template in templates.templates %}
                    <option value=\"{{ template.getId() }}\"{{ template.getId() == templates.selected ? ' selected' }}>
                      {{ template.getName() }}
                    </option>
                  {% endfor %}
                </select>
              </div>
              <div class=\"col-auto\">
                <input class=\"btn btn-secondary\" type=\"submit\" formaction=\"{{ url('/export/template/update') }}\" name=\"updateTemplate\" id=\"updateTemplate\" value=\"{{ t('Update') }}\">
              </div>
              <div class=\"col-auto\">
                <input class=\"btn btn-secondary\" type=\"submit\" formaction=\"{{ url('/export/template/delete') }}\" name=\"deleteTemplate\" id=\"deleteTemplate\" value=\"{{ t('Delete') }}\">
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  {% endif %}

  {% if sql_query is not empty %}
    <div class=\"card mb-3\">
      <div class=\"card-header\">
        {{ t('SQL query:', notes = 'Title of the option on the Export page') }}
      </div>
      <div class=\"card-body\">
        <div id=\"sqlqueryform\">
          <input class=\"btn btn-secondary\" type=\"submit\" id=\"showsqlquery\" value=\"{{ t('Show SQL query', notes = 'Button to show the SQL query on the export page') }}\">
        </div>
        <div class=\"d-none\"></div>
      </div>
    </div>
    <div class=\"modal fade\" id=\"showSqlQueryModal\" tabindex=\"-1\" aria-labelledby=\"showSqlQueryModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"showSqlQueryModalLabel\">{{ t('Loading') }}</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{{ t('Close') }}\"></button>
          </div>
          <div class=\"modal-body\">
            <div id=\"export_sql_modal_content\">
              <code class=\"sql\">
                <pre id=\"sql_preview_query\">{{ sql_query }}</pre>
              </code>
            </div>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">{{ t('Close') }}</button>
          </div>
        </div>
      </div>
    </div>
  {% endif %}

  <form method=\"post\" action=\"{{ url('/export') }}\" name=\"dump\" class=\"disableAjax\">
    {{ get_hidden_inputs(hidden_inputs) }}

    {% if export_method != 'custom-no-form' %}
      <div class=\"card mb-3\" id=\"quick_or_custom\">
        <div class=\"card-header\">{{ t('Export method:') }}</div>
        <div class=\"card-body\">
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"quick_or_custom\" value=\"quick\" id=\"radio_quick_export\"{{ export_method == 'quick' ? ' checked' }}>
            <label class=\"form-check-label\" for=\"radio_quick_export\">{{ t('Quick - display only the minimal options') }}</label>
          </div>
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"quick_or_custom\" value=\"custom\" id=\"radio_custom_export\"{{ export_method == 'custom' ? ' checked' }}>
            <label class=\"form-check-label\" for=\"radio_custom_export\">{{ t('Custom - display all possible options') }}</label>
          </div>
        </div>
      </div>
    {% endif %}

    <div class=\"card mb-3\" id=\"format\">
      <div class=\"card-header\">{{ t('Format:') }}</div>
      <div class=\"card-body\">
        <select class=\"form-select\" id=\"plugins\" name=\"what\" aria-label=\"{{ t('File format to export') }}\">
          {% for option in plugins_choice %}
            <option value=\"{{ option.name }}\"{{ option.is_selected ? ' selected' }} data-is-binary=\"{{ option.is_binary ? 'true' : 'false' }}\">{{ option.text }}</option>
          {% endfor %}
        </select>
      </div>
    </div>

    {% block selection_options %}{% endblock %}

    {% if rows is not empty %}
      <div class=\"card mb-3 d-none\" id=\"rows\">
        <div class=\"card-header\">{{ t('Rows:') }}</div>
        <div class=\"card-body\">
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"allrows\" value=\"1\" id=\"radio_allrows_1\"{{ rows.allrows is null or rows.allrows == 1 ? ' checked' }}>
            <label class=\"form-check-label\" for=\"radio_allrows_1\">{{ t('Dump all rows') }}</label>
          </div>
          <div class=\"form-check mb-2\">
            <input class=\"form-check-input\" type=\"radio\" name=\"allrows\" value=\"0\" id=\"radio_allrows_0\"{{ rows.allrows is not null and rows.allrows == 0 ? ' checked' }}>
            <label class=\"form-check-label\" for=\"radio_allrows_0\">{{ t('Dump some row(s)') }}</label>
          </div>
          <ul class=\"list-group\">
            <li class=\"list-group-item\">
              <label class=\"form-label\" for=\"limit_to\">{{ t('Number of rows:') }}</label>
              <input class=\"form-control\" type=\"text\" id=\"limit_to\" name=\"limit_to\" size=\"5\" value=\"
                  {%- if rows.limit_to is not null -%}
                    {{- rows.limit_to -}}
                  {%- elseif rows.unlim_num_rows is not empty and rows.unlim_num_rows != 0 -%}
                    {{- rows.unlim_num_rows -}}
                  {%- else %}
                    {{- rows.number_of_rows -}}
                  {%- endif -%}\" onfocus=\"this.select()\">
            </li>
            <li class=\"list-group-item\">
              <label class=\"form-label\" for=\"limit_from\">{{ t('Row to begin at:') }}</label>
              <input class=\"form-control\" type=\"text\" id=\"limit_from\" name=\"limit_from\" size=\"5\" value=\"{{ rows.limit_from is not null ? rows.limit_from : 0 }}\" onfocus=\"this.select()\">
            </li>
          </ul>
        </div>
      </div>
    {% endif %}

    {% if has_save_dir %}
      <div class=\"card mb-3 d-none\" id=\"output_quick_export\">
        <div class=\"card-header\">{{ t('Output:') }}</div>
        <div class=\"card-body\">
          <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"quick_export_onserver\" value=\"saveit\" id=\"checkbox_quick_dump_onserver\"{{ export_is_checked ? ' checked' }}>
            <label class=\"form-check-label\" for=\"checkbox_quick_dump_onserver\">
              {{ t('Save on server in the directory <strong>%s</strong>')|format(save_dir|e)|raw }}
            </label>
          </div>
          <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"quick_export_onserver_overwrite\" value=\"saveitover\" id=\"checkbox_quick_dump_onserver_overwrite\"
              {{- export_overwrite_is_checked ? ' checked' }}>
            <label class=\"form-check-label\" for=\"checkbox_quick_dump_onserver_overwrite\">
              {{ t('Overwrite existing file(s)') }}
            </label>
          </div>
        </div>
      </div>
    {% endif %}

    <div class=\"modal fade\" id=\"renameExportModal\" tabindex=\"-1\" aria-labelledby=\"renameExportModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog modal-xl\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"renameExportModalLabel\">{{ t('Rename exported databases/tables/columns') }}</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{{ t('Close') }}\"></button>
          </div>
          <div class=\"modal-body overflow-auto\">
            <table class=\"table align-middle mb-3\" id=\"alias_data\">
              <thead>
                <tr>
                  <th colspan=\"4\">
                    {{ t('Defined aliases') }}
                  </th>
                </tr>
              </thead>

              <tbody>
                {% for db, db_data in aliases %}
                  {% if db_data.alias is defined and db_data.alias is not null %}
                    <tr>
                      <th>{{ t('Database', context = 'Alias') }}</th>
                      <td>{{ db }}</td>
                      <td>
                        <input name=\"aliases[{{ db }}][alias]\" value=\"{{ db_data.alias }}\" type=\"text\">
                      </td>
                      <td>
                        <button class=\"alias_remove btn btn-secondary\">{{ t('Remove') }}</button>
                      </td>
                    </tr>
                  {% endif %}

                  {% for table, table_data in db_data.tables ?? [] %}
                    {% if table_data.alias is defined and table_data.alias is not null %}
                      <tr>
                        <th>{{ t('Table', context = 'Alias') }}</th>
                        <td>{{ db }}.{{ table }}</td>
                        <td>
                          <input name=\"aliases[{{ db }}][tables][{{ table }}][alias]\" value=\"{{ table_data.alias }}\" type=\"text\">
                        </td>
                        <td>
                          <button class=\"alias_remove btn btn-secondary\">{{ t('Remove') }}</button>
                        </td>
                      </tr>
                    {% endif %}

                    {% for column, column_name in table_data.columns ?? [] %}
                      <tr>
                        <th>{{ t('Column', context = 'Alias') }}</th>
                        <td>{{ db }}.{{ table }}.{{ column }}</td>
                        <td>
                          <input name=\"aliases[{{ db }}][tables][{{ table }}][colums][{{ column }}]\" value=\"{{ column_name }}\" type=\"text\">
                        </td>
                        <td>
                          <button class=\"alias_remove btn btn-secondary\">{{ t('Remove') }}</button>
                        </td>
                      </tr>
                    {% endfor %}
                  {% endfor %}
                {% endfor %}
              </tbody>

              {# Empty row for javascript manipulations. #}
              <tfoot class=\"hide\">
                <tr>
                  <th></th>
                  <td></td>
                  <td>
                    <input name=\"aliases_new\" value=\"\" type=\"text\">
                  </td>
                  <td>
                    <button class=\"alias_remove btn btn-secondary\">{{ t('Remove') }}</button>
                  </td>
                </tr>
              </tfoot>
            </table>

            <table class=\"table align-middle\">
              <thead>
                <tr>
                  <th colspan=\"4\">{{ t('Define new aliases') }}</th>
                </tr>
              </thead>
              <tr>
                <td>
                  <label>{{ t('Select database:') }}</label>
                </td>
                <td>
                  <select id=\"db_alias_select\">
                    <option value=\"\"></option>
                  </select>
                </td>
                <td>
                  <input id=\"db_alias_name\" placeholder=\"{{ t('New database name') }}\" disabled=\"1\">
                </td>
                <td>
                  <button id=\"db_alias_button\" class=\"btn btn-secondary\" disabled=\"1\">{{ t('Add') }}</button>
                </td>
              </tr>
              <tr>
                <td>
                  <label>{{ t('Select table:') }}</label>
                </td>
                <td>
                  <select id=\"table_alias_select\">
                    <option value=\"\"></option>
                  </select>
                </td>
                <td>
                  <input id=\"table_alias_name\" placeholder=\"{{ t('New table name') }}\" disabled=\"1\">
                </td>
                <td>
                  <button id=\"table_alias_button\" class=\"btn btn-secondary\" disabled=\"1\">{{ t('Add') }}</button>
                </td>
              </tr>
              <tr>
                <td>
                  <label>{{ t('Select column:') }}</label>
                </td>
                <td>
                  <select id=\"column_alias_select\">
                    <option value=\"\"></option>
                  </select>
                </td>
                <td>
                  <input id=\"column_alias_name\" placeholder=\"{{ t('New column name') }}\" disabled=\"1\">
                </td>
                <td>
                  <button id=\"column_alias_button\" class=\"btn btn-secondary\" disabled=\"1\">{{ t('Add') }}</button>
                </td>
              </tr>
            </table>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" id=\"saveAndCloseBtn\" data-bs-dismiss=\"modal\">
              {{ t('Save & close') }}
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class=\"card mb-3 d-none\" id=\"output\">
      <div class=\"card-header\">{{ t('Output:') }}</div>
      <ul class=\"list-group list-group-flush\">
        <li class=\"list-group-item\">
          <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"btn_alias_config\"{{ has_aliases ? ' checked' }}>
            <label class=\"form-check-label\" for=\"btn_alias_config\">{{ t('Rename exported databases/tables/columns') }}</label>
          </div>
        </li>

        {% if export_type != 'server' %}
          <li class=\"list-group-item\">
            <div class=\"form-check form-switch\">
              <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"lock_tables\" value=\"something\" id=\"checkbox_lock_tables\"
                {{- (not repopulate and is_checked_lock_tables) or lock_tables ? ' checked' }}>
              <label class=\"form-check-label\" for=\"checkbox_lock_tables\">
                {{ t('Use %s statement')|format('<code>LOCK TABLES</code>')|raw }}
              </label>
            </div>
          </li>
        {% endif %}

        <li class=\"list-group-item\">
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" id=\"radio_view_as_text\" name=\"output_format\" value=\"astext\"{{ repopulate or export_asfile == false ? ' checked' }}>
            <label class=\"form-check-label\" for=\"radio_view_as_text\">{{ t('View output as text') }}</label>
          </div>
          <div class=\"form-check mb-2\">
            <input class=\"form-check-input\" type=\"radio\" name=\"output_format\" value=\"sendit\" id=\"radio_dump_asfile\"{{ not repopulate and is_checked_asfile ? ' checked' }}>
            <label class=\"form-check-label\" for=\"radio_dump_asfile\">{{ t('Save output to a file') }}</label>
          </div>
          <div class=\"hstack gap-3\">
            <div class=\"vr\"></div>
            <ul class=\"list-group\" id=\"ul_save_asfile\">
              {% if has_save_dir %}
                <li class=\"list-group-item\">
                  <div class=\"form-check form-switch\">
                    <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"onserver\" value=\"saveit\" id=\"checkbox_dump_onserver\"{{ is_checked_export ? ' checked' }}>
                    <label class=\"form-check-label\" for=\"checkbox_dump_onserver\">
                      {{ t('Save on server in the directory <strong>%s</strong>')|format(save_dir|e)|raw }}
                    </label>
                  </div>
                  <div class=\"form-check form-switch\">
                    <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"onserver_overwrite\" value=\"saveitover\" id=\"checkbox_dump_onserver_overwrite\"
                      {{- is_checked_export_overwrite ? ' checked' }}>
                    <label class=\"form-check-label\" for=\"checkbox_dump_onserver_overwrite\">
                      {{ t('Overwrite existing file(s)') }}
                    </label>
                  </div>
                </li>
              {% endif %}

              <li class=\"list-group-item\">
                <div class=\"row g-3 align-items-center\">
                  <div class=\"col-auto\">
                    <label for=\"filename_template\" class=\"col-form-label\">
                      {{ t('File name template:') }}
                      {{ show_hint(t('This value is interpreted using the \\'strftime\\' function, so you can use time formatting strings. Additionally the following transformations will happen: %s Other text will be kept as is. See the FAQ 6.27 for details.')|format(filename_hint)) }}
                    </label>
                  </div>
                  <div class=\"col-auto\">
                    <input type=\"text\" class=\"form-control\" name=\"filename_template\" id=\"filename_template\" value=\"{{ filename_template }}\">
                  </div>
                  <div class=\"col-auto\">
                    <div class=\"form-check form-switch\">
                      <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"remember_template\" id=\"checkbox_remember_template\"{{ is_checked_remember_file_template ? ' checked' }}>
                      <label class=\"form-check-label\" for=\"checkbox_remember_template\">
                        {{ t('Use this for future exports') }}
                      </label>
                    </div>
                  </div>
                </div>
              </li>

              {% if is_encoding_supported %}
                <li class=\"list-group-item\">
                  <div class=\"row\">
                    <div class=\"col-auto\">
                      <label for=\"select_charset\" class=\"col-form-label\">{{ t('Character set of the file:') }}</label>
                    </div>
                    <div class=\"col-auto\">
                      <select class=\"form-select\" id=\"select_charset\" name=\"charset\">
                        {% for charset in encodings %}
                          <option value=\"{{ charset }}\"
                            {{- (export_charset is empty and charset == 'utf-8') or charset == export_charset ? ' selected' }}>
                            {{- charset -}}
                          </option>
                        {% endfor %}
                      </select>
                    </div>
                  </div>
                </li>
              {% endif %}

              {% if has_zip or has_gzip %}
                <li class=\"list-group-item\">
                  <div class=\"row\">
                    <div class=\"col-auto\">
                      <label for=\"compression\" class=\"col-form-label\">{{ t('Compression:') }}</label>
                    </div>
                    <div class=\"col-auto\">
                      <select class=\"form-select\" id=\"compression\" name=\"compression\">
                        <option value=\"none\">{{ t('None') }}</option>
                        {% if has_zip %}
                          <option value=\"zip\"
                            {{- selected_compression == 'zip' ? ' selected' }}>
                            {{ t('zipped') }}
                          </option>
                        {% endif %}
                        {% if has_gzip %}
                          <option value=\"gzip\"
                            {{- selected_compression == 'gzip' ? ' selected' }}>
                            {{ t('gzipped') }}
                          </option>
                        {% endif %}
                      </select>
                    </div>
                  </div>
                </li>
              {% else %}
                <input type=\"hidden\" name=\"compression\" value=\"{{ selected_compression }}\">
              {% endif %}

              {% if export_type == 'server' or export_type == 'database' %}
                <li class=\"list-group-item\">
                  <div class=\"form-check form-switch\">
                    <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"checkbox_as_separate_files\" name=\"as_separate_files\" value=\"{{ export_type }}\"
                      {{- is_checked_as_separate_files ? ' checked' }}>
                    <label class=\"form-check-label\" for=\"checkbox_as_separate_files\">
                      {% if export_type == 'server' %}
                        {{ t('Export databases as separate files') }}
                      {% elseif export_type == 'database' %}
                        {{ t('Export tables as separate files') }}
                      {% endif %}
                    </label>
                  </div>
                </li>
              {% endif %}
            </ul>
          </div>
        </li>

        <li class=\"list-group-item\">
          <label for=\"maxsize\" class=\"form-label\">{{ t('Skip tables larger than:') }}</label>
          <input class=\"form-control\" type=\"number\" id=\"maxsize\" name=\"maxsize\" aria-describedby=\"maxsizeHelp\">
          <div id=\"maxsizeHelp\" class=\"form-text\">{{ t('The size is measured in MiB.') }}</div>
        </li>
      </ul>
    </div>

    <div class=\"card mb-3 d-none\" id=\"format_specific_opts\">
      <div class=\"card-header\">{{ t('Format-specific options:') }}</div>
      <div class=\"card-body\">
        {{ options|raw }}
      </div>
    </div>

    {% if can_convert_kanji %}
      {# Japanese encoding setting #}
      <div class=\"card mb-3\" id=\"kanji_encoding\">
        <div class=\"card-header\">{{ t('Encoding Conversion:') }}</div>
        <div class=\"card-body\">
          {% include 'encoding/kanji_encoding_form.twig' %}
        </div>
      </div>
    {% endif %}

    <div id=\"submit\">
      <input id=\"buttonGo\" class=\"btn btn-primary\" type=\"submit\" value=\"{{ t('Export') }}\" data-exec-time-limit=\"{{ exec_time_limit }}\">
    </div>
  </form>
</div>
", "export.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/export.twig");
    }
}

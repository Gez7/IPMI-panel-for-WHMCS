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

/* table/gis_visualization/gis_visualization.twig */
class __TwigTemplate_2a082ae9ad6976f14b496986b7a5d2ed extends Template
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
        yield "<div id=\"div_view_options\" class=\"container-fluid\">
  <h2>";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Display GIS Visualization"), "html", null, true);
        yield "</h2>

  <div class=\"card\">
    <div id=\"gis_div\" class=\"card-body\">
      <form method=\"post\" action=\"";
        // line 6
        yield PhpMyAdmin\Url::getFromRoute("/table/gis-visualization");
        yield "\" class=\"row g-3 align-items-start\">
        ";
        // line 7
        yield PhpMyAdmin\Url::getHiddenInputs((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 7, $this->source); })()));
        yield "

        <div class=\"col-12 col-md-6 col-xl\">
          <label class=\"form-label\" for=\"labelColumn\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Label column"), "html", null, true);
        yield "</label>
          <select name=\"visualizationSettings[labelColumn]\" id=\"labelColumn\" class=\"form-select autosubmit\">
            <option value=\"\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("-- None --"), "html", null, true);
        yield "</option>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["label_candidates"]) || array_key_exists("label_candidates", $context) ? $context["label_candidates"] : (function () { throw new RuntimeError('Variable "label_candidates" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 14
            yield "              <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\"";
            yield ((($context["value"] == (isset($context["labelColumn"]) || array_key_exists("labelColumn", $context) ? $context["labelColumn"] : (function () { throw new RuntimeError('Variable "labelColumn" does not exist.', 14, $this->source); })()))) ? (" selected") : (""));
            yield ">
                ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "
              </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "          </select>
        </div>
        <div class=\"col-12 col-md-6 col-xl\">
          <label class=\"form-label\" for=\"spatialColumn\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Spatial column"), "html", null, true);
        yield "</label>
          <select name=\"visualizationSettings[spatialColumn]\" id=\"spatialColumn\" class=\"form-select autosubmit\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["spatial_candidates"]) || array_key_exists("spatial_candidates", $context) ? $context["spatial_candidates"] : (function () { throw new RuntimeError('Variable "spatial_candidates" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 24
            yield "              <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\"";
            yield ((($context["value"] == (isset($context["spatialColumn"]) || array_key_exists("spatialColumn", $context) ? $context["spatialColumn"] : (function () { throw new RuntimeError('Variable "spatialColumn" does not exist.', 24, $this->source); })()))) ? (" selected") : (""));
            yield ">
                ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "
              </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "          </select>
        </div>

        <div class=\"col-12\">
          ";
        // line 32
        yield Twig\Extension\CoreExtension::include($this->env, $context, "table/start_and_number_of_rows_fieldset.twig", (isset($context["start_and_number_of_rows_fieldset"]) || array_key_exists("start_and_number_of_rows_fieldset", $context) ? $context["start_and_number_of_rows_fieldset"] : (function () { throw new RuntimeError('Variable "start_and_number_of_rows_fieldset" does not exist.', 32, $this->source); })()));
        yield "
        </div>

        <div class=\"d-flex justify-content-between align-items-center\">
          <input type=\"hidden\" name=\"redraw\" value=\"true\">
          <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" name=\"useBaseLayer\" id=\"useOsmAsBaseLayerSwitch\"";
        // line 38
        yield (((($tmp = (((array_key_exists("useBaseLayer", $context) &&  !(null === $context["useBaseLayer"]))) ? ($context["useBaseLayer"]) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
        yield ">
            <label class=\"form-check-label\" for=\"useOsmAsBaseLayerSwitch\" id=\"useOsmAsBaseLayerSwitchLabel\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Use OpenStreetMaps as Base Layer"), "html", null, true);
        yield "</label>
          </div>
          <div class=\"dropdown\">
            <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"saveImageButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
              ";
        // line 43
        yield PhpMyAdmin\Html\Generator::getIcon("b_saveimage", \_gettext("Save"));
        yield "
            </button>
            <ul class=\"dropdown-menu\" aria-labelledby=\"saveImageButton\">
              <li><a class=\"dropdown-item disableAjax\" href=\"";
        // line 46
        yield (isset($context["download_url"]) || array_key_exists("download_url", $context) ? $context["download_url"] : (function () { throw new RuntimeError('Variable "download_url" does not exist.', 46, $this->source); })());
        yield "&fileFormat=png\">PNG</a></li>
              <li><a class=\"dropdown-item disableAjax\" href=\"";
        // line 47
        yield (isset($context["download_url"]) || array_key_exists("download_url", $context) ? $context["download_url"] : (function () { throw new RuntimeError('Variable "download_url" does not exist.', 47, $this->source); })());
        yield "&fileFormat=pdf\">PDF</a></li>
              <li><a class=\"dropdown-item disableAjax\" href=\"";
        // line 48
        yield (isset($context["download_url"]) || array_key_exists("download_url", $context) ? $context["download_url"] : (function () { throw new RuntimeError('Variable "download_url" does not exist.', 48, $this->source); })());
        yield "&fileFormat=svg\">SVG</a></li>
            </ul>
          </div>
        </div>
      </form>

      <div id=\"visualization-placeholder\" class=\"mt-3\" style=\"height: ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 54, $this->source); })()), "html", null, true);
        yield "px;\" data-ol-data=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["open_layers_data"]) || array_key_exists("open_layers_data", $context) ? $context["open_layers_data"] : (function () { throw new RuntimeError('Variable "open_layers_data" does not exist.', 54, $this->source); })())), "html_attr");
        yield "\">
        <div class=\"visualization-target visualization-target-svg hide\">";
        // line 55
        yield (isset($context["visualization"]) || array_key_exists("visualization", $context) ? $context["visualization"] : (function () { throw new RuntimeError('Variable "visualization" does not exist.', 55, $this->source); })());
        yield "</div>
        <div class=\"visualization-target visualization-target-ol hide\"></div>
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
        return "table/gis_visualization/gis_visualization.twig";
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
        return array (  176 => 55,  170 => 54,  161 => 48,  157 => 47,  153 => 46,  147 => 43,  140 => 39,  136 => 38,  127 => 32,  121 => 28,  112 => 25,  105 => 24,  101 => 23,  96 => 21,  91 => 18,  82 => 15,  75 => 14,  71 => 13,  67 => 12,  62 => 10,  56 => 7,  52 => 6,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"div_view_options\" class=\"container-fluid\">
  <h2>{{ t('Display GIS Visualization') }}</h2>

  <div class=\"card\">
    <div id=\"gis_div\" class=\"card-body\">
      <form method=\"post\" action=\"{{ url('/table/gis-visualization') }}\" class=\"row g-3 align-items-start\">
        {{ get_hidden_inputs(url_params) }}

        <div class=\"col-12 col-md-6 col-xl\">
          <label class=\"form-label\" for=\"labelColumn\">{{ t('Label column') }}</label>
          <select name=\"visualizationSettings[labelColumn]\" id=\"labelColumn\" class=\"form-select autosubmit\">
            <option value=\"\">{{ t('-- None --') }}</option>
            {% for value in label_candidates %}
              <option value=\"{{ value }}\"{{ value == labelColumn ? ' selected' }}>
                {{ value }}
              </option>
            {% endfor %}
          </select>
        </div>
        <div class=\"col-12 col-md-6 col-xl\">
          <label class=\"form-label\" for=\"spatialColumn\">{{ t('Spatial column') }}</label>
          <select name=\"visualizationSettings[spatialColumn]\" id=\"spatialColumn\" class=\"form-select autosubmit\">
            {% for value in spatial_candidates %}
              <option value=\"{{ value }}\"{{ value == spatialColumn ? ' selected' }}>
                {{ value }}
              </option>
            {% endfor %}
          </select>
        </div>

        <div class=\"col-12\">
          {{ include('table/start_and_number_of_rows_fieldset.twig', start_and_number_of_rows_fieldset) }}
        </div>

        <div class=\"d-flex justify-content-between align-items-center\">
          <input type=\"hidden\" name=\"redraw\" value=\"true\">
          <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" name=\"useBaseLayer\" id=\"useOsmAsBaseLayerSwitch\"{{ useBaseLayer ?? false ? ' checked' }}>
            <label class=\"form-check-label\" for=\"useOsmAsBaseLayerSwitch\" id=\"useOsmAsBaseLayerSwitchLabel\">{{ t('Use OpenStreetMaps as Base Layer') }}</label>
          </div>
          <div class=\"dropdown\">
            <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"saveImageButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
              {{ get_icon('b_saveimage', t('Save')) }}
            </button>
            <ul class=\"dropdown-menu\" aria-labelledby=\"saveImageButton\">
              <li><a class=\"dropdown-item disableAjax\" href=\"{{ download_url|raw }}&fileFormat=png\">PNG</a></li>
              <li><a class=\"dropdown-item disableAjax\" href=\"{{ download_url|raw }}&fileFormat=pdf\">PDF</a></li>
              <li><a class=\"dropdown-item disableAjax\" href=\"{{ download_url|raw }}&fileFormat=svg\">SVG</a></li>
            </ul>
          </div>
        </div>
      </form>

      <div id=\"visualization-placeholder\" class=\"mt-3\" style=\"height: {{ height }}px;\" data-ol-data=\"{{ open_layers_data|json_encode|e('html_attr') }}\">
        <div class=\"visualization-target visualization-target-svg hide\">{{ visualization|raw }}</div>
        <div class=\"visualization-target visualization-target-ol hide\"></div>
      </div>
    </div>
  </div>
</div>
", "table/gis_visualization/gis_visualization.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/gis_visualization/gis_visualization.twig");
    }
}

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

/* server/engines/index.twig */
class __TwigTemplate_5e95f6e65cc9bb272942d45824df09ab extends Template
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
        yield "<div class=\"container-fluid\">
  <div class=\"row\">
  <h2>
    ";
        // line 4
        yield PhpMyAdmin\Html\Generator::getImage("b_engine");
        yield "
    ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Storage engines"), "html", null, true);
        yield "
  </h2>
  </div>

  <div class=\"table-responsive\">
    <table class=\"table table-striped table-hover w-auto\">
      <thead>
        <tr>
          <th scope=\"col\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Storage Engine"), "html", null, true);
        yield "</th>
          <th scope=\"col\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Description"), "html", null, true);
        yield "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["engines"]) || array_key_exists("engines", $context) ? $context["engines"] : (function () { throw new RuntimeError('Variable "engines" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["engine"] => $context["details"]) {
            // line 19
            yield "          <tr class=\"";
            // line 20
            yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["details"], "Support", [], "array", false, false, false, 20) == "NO") || (CoreExtension::getAttribute($this->env, $this->source, $context["details"], "Support", [], "array", false, false, false, 20) == "DISABLED"))) ? (" disabled") : (""));
            yield "
            ";
            // line 21
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["details"], "Support", [], "array", false, false, false, 21) == "DEFAULT")) ? (" marked") : (""));
            yield "\">
            <td>
              <a rel=\"newpage\" href=\"";
            // line 23
            yield PhpMyAdmin\Url::getFromRoute(("/server/engines/" . $context["engine"]));
            yield "\">
                ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["details"], "Engine", [], "array", false, false, false, 24), "html", null, true);
            yield "
              </a>
            </td>
            <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["details"], "Comment", [], "array", false, false, false, 27), "html", null, true);
            yield "</td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['engine'], $context['details'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "      </tbody>
    </table>
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
        return "server/engines/index.twig";
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
        return array (  107 => 30,  98 => 27,  92 => 24,  88 => 23,  83 => 21,  79 => 20,  77 => 19,  73 => 18,  66 => 14,  62 => 13,  51 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container-fluid\">
  <div class=\"row\">
  <h2>
    {{ get_image('b_engine') }}
    {{ t('Storage engines') }}
  </h2>
  </div>

  <div class=\"table-responsive\">
    <table class=\"table table-striped table-hover w-auto\">
      <thead>
        <tr>
          <th scope=\"col\">{{ t('Storage Engine') }}</th>
          <th scope=\"col\">{{ t('Description') }}</th>
        </tr>
      </thead>
      <tbody>
        {% for engine, details in engines %}
          <tr class=\"
            {{- details['Support'] == 'NO' or details['Support'] == 'DISABLED' ? ' disabled' }}
            {{ details['Support'] == 'DEFAULT' ? ' marked' }}\">
            <td>
              <a rel=\"newpage\" href=\"{{ url('/server/engines/' ~ engine) }}\">
                {{ details['Engine'] }}
              </a>
            </td>
            <td>{{ details['Comment'] }}</td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
</div>
", "server/engines/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/engines/index.twig");
    }
}

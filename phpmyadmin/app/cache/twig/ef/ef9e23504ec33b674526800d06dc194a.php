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

/* database/designer/page_save_as.twig */
class __TwigTemplate_403d35c1e7bd39d68777c5dd00a40317 extends Template
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
        yield "<form action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/database/designer");
        yield "\" method=\"post\" name=\"save_as_pages\" id=\"save_as_pages\" class=\"ajax\">
  ";
        // line 2
        yield PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 2, $this->source); })()));
        yield "
  <table class=\"table table-borderless\">
    <tbody>
      <tr>
        <td>
          <input type=\"hidden\" name=\"operation\" value=\"savePage\">
          ";
        // line 8
        yield from $this->load("database/designer/page_selector.twig", 8)->unwrap()->yield(CoreExtension::toArray(["pdfwork" =>         // line 9
(isset($context["pdfwork"]) || array_key_exists("pdfwork", $context) ? $context["pdfwork"] : (function () { throw new RuntimeError('Variable "pdfwork" does not exist.', 9, $this->source); })()), "pages" =>         // line 10
(isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 10, $this->source); })())]));
        // line 12
        yield "        </td>
      </tr>
      <tr>
        <td>
          <div>
            <input type=\"radio\" name=\"save_page\" id=\"savePageSameRadio\" value=\"same\" checked>
            <label for=\"savePageSameRadio\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Save to selected page"), "html", null, true);
        yield "</label>
          </div>
          <div>
            <input type=\"radio\" name=\"save_page\" id=\"savePageNewRadio\" value=\"new\">
            <label for=\"savePageNewRadio\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Create a page and save to it"), "html", null, true);
        yield "</label>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <label for=\"selected_value\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("New page name"), "html", null, true);
        yield "</label>
          <input type=\"text\" name=\"selected_value\" id=\"selected_value\">
        </td>
      </tr>
    </tbody>
  </table>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/designer/page_save_as.twig";
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
        return array (  84 => 28,  75 => 22,  68 => 18,  60 => 12,  58 => 10,  57 => 9,  56 => 8,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form action=\"{{ url('/database/designer') }}\" method=\"post\" name=\"save_as_pages\" id=\"save_as_pages\" class=\"ajax\">
  {{ get_hidden_inputs(db) }}
  <table class=\"table table-borderless\">
    <tbody>
      <tr>
        <td>
          <input type=\"hidden\" name=\"operation\" value=\"savePage\">
          {% include 'database/designer/page_selector.twig' with {
            'pdfwork': pdfwork,
            'pages': pages
          } only %}
        </td>
      </tr>
      <tr>
        <td>
          <div>
            <input type=\"radio\" name=\"save_page\" id=\"savePageSameRadio\" value=\"same\" checked>
            <label for=\"savePageSameRadio\">{{ t('Save to selected page') }}</label>
          </div>
          <div>
            <input type=\"radio\" name=\"save_page\" id=\"savePageNewRadio\" value=\"new\">
            <label for=\"savePageNewRadio\">{{ t('Create a page and save to it') }}</label>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <label for=\"selected_value\">{{ t('New page name') }}</label>
          <input type=\"text\" name=\"selected_value\" id=\"selected_value\">
        </td>
      </tr>
    </tbody>
  </table>
</form>
", "database/designer/page_save_as.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/designer/page_save_as.twig");
    }
}

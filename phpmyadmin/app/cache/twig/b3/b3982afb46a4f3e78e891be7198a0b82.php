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

/* table/index_rename_form.twig */
class __TwigTemplate_5d421ab3cb7ae9d23e0bdefc63746dc6 extends Template
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
        yield PhpMyAdmin\Url::getFromRoute("/table/indexes/rename");
        yield "\" method=\"post\" name=\"index_frm\" id=\"index_frm\" class=\"card ajax\">

  ";
        // line 3
        yield PhpMyAdmin\Url::getHiddenInputs((isset($context["form_params"]) || array_key_exists("form_params", $context) ? $context["form_params"] : (function () { throw new RuntimeError('Variable "form_params" does not exist.', 3, $this->source); })()));
        yield "

  <div class=\"card-body\">
    <div class=\"index_info\">
      <div>
          <div class=\"label\">
              <strong>
                  <label for=\"input_index_name\">
                      ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Index name:"), "html", null, true);
        yield "
                      ";
        // line 12
        yield PhpMyAdmin\Html\Generator::showHint(\_gettext("\"PRIMARY\" <b>must</b> be the name of and <b>only of</b> a primary key!"));
        yield "
                  </label>
              </strong>
          </div>

          <input type=\"text\"
              name=\"index\"
              id=\"input_index_name\"
              size=\"25\"
              maxlength=\"64\"
              value=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 22, $this->source); })()), "getName", [], "method", false, false, false, 22), "html", null, true);
        yield "\"
              onfocus=\"this.select()\">
      </div>
    </div>
  </div>
  <div class=\"card-footer\">
    <button class=\"btn btn-secondary\" type=\"submit\" id=\"preview_index_frm\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Preview SQL"), "html", null, true);
        yield "</button>
  </div>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/index_rename_form.twig";
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
        return array (  85 => 28,  76 => 22,  63 => 12,  59 => 11,  48 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form action=\"{{ url('/table/indexes/rename') }}\" method=\"post\" name=\"index_frm\" id=\"index_frm\" class=\"card ajax\">

  {{ get_hidden_inputs(form_params) }}

  <div class=\"card-body\">
    <div class=\"index_info\">
      <div>
          <div class=\"label\">
              <strong>
                  <label for=\"input_index_name\">
                      {{ t('Index name:') }}
                      {{ show_hint(t('\"PRIMARY\" <b>must</b> be the name of and <b>only of</b> a primary key!')) }}
                  </label>
              </strong>
          </div>

          <input type=\"text\"
              name=\"index\"
              id=\"input_index_name\"
              size=\"25\"
              maxlength=\"64\"
              value=\"{{ index.getName() }}\"
              onfocus=\"this.select()\">
      </div>
    </div>
  </div>
  <div class=\"card-footer\">
    <button class=\"btn btn-secondary\" type=\"submit\" id=\"preview_index_frm\">{{ t('Preview SQL') }}</button>
  </div>
</form>
", "table/index_rename_form.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/index_rename_form.twig");
    }
}

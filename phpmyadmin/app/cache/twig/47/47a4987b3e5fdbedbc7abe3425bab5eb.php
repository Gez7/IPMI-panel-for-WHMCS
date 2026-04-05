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

/* login/twofactor/application_configure.twig */
class __TwigTemplate_ce94003eeea5027465d3a654e6ee096a extends Template
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
        yield PhpMyAdmin\Url::getHiddenInputs();
        yield "
<p>
    ";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Please scan following QR code into the two-factor authentication app on your device and enter authentication code it generates."), "html", null, true);
        yield "
</p>
<p>
    ";
        // line 6
        if ((($tmp = (isset($context["has_imagick"]) || array_key_exists("has_imagick", $context) ? $context["has_imagick"] : (function () { throw new RuntimeError('Variable "has_imagick" does not exist.', 6, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 7, $this->source); })()), "html", null, true);
            yield "\">
    ";
        } else {
            // line 9
            yield "        ";
            yield (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 9, $this->source); })());
            yield "
    ";
        }
        // line 11
        yield "</p>
<p>
    ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Secret/key:"), "html", null, true);
        yield " <strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["secret"]) || array_key_exists("secret", $context) ? $context["secret"] : (function () { throw new RuntimeError('Variable "secret" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "</strong>
</p>
<p>
    <label>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Authentication code:"), "html", null, true);
        yield " <input type=\"text\" name=\"2fa_code\" autocomplete=\"off\"></label>
</p>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login/twofactor/application_configure.twig";
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
        return array (  79 => 16,  71 => 13,  67 => 11,  61 => 9,  55 => 7,  53 => 6,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ get_hidden_inputs() }}
<p>
    {{ t('Please scan following QR code into the two-factor authentication app on your device and enter authentication code it generates.') }}
</p>
<p>
    {% if has_imagick %}
        <img src=\"{{ image }}\">
    {% else %}
        {{ image|raw }}
    {% endif %}
</p>
<p>
    {{ t('Secret/key:') }} <strong>{{ secret }}</strong>
</p>
<p>
    <label>{{ t('Authentication code:') }} <input type=\"text\" name=\"2fa_code\" autocomplete=\"off\"></label>
</p>
", "login/twofactor/application_configure.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/login/twofactor/application_configure.twig");
    }
}

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

/* encoding/kanji_encoding_form.twig */
class __TwigTemplate_d7765ce6fb81f2dbe35923ecf6ef56d5 extends Template
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
        yield "<ul>
    <li>
        <input type=\"radio\" name=\"knjenc\" value=\"\" checked id=\"kj-none\">
        <label for=\"kj-none\">
          ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(
// l10n: This is currently used only in Japanese locales
\_pgettext("None encoding conversion", "None")
, "html", null, true);
        yield "
        </label>
        <input type=\"radio\" name=\"knjenc\" value=\"EUC-JP\" id=\"kj-euc\">
        <label for=\"kj-euc\">EUC</label>
        <input type=\"radio\" name=\"knjenc\" value=\"SJIS\" id=\"kj-sjis\">
        <label for=\"kj-sjis\">SJIS</label>
    </li>
    <li>
        <input type=\"checkbox\" name=\"xkana\" value=\"kana\" id=\"kj-kana\">
        <label for=\"kj-kana\">
          ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(
// l10n: This is currently used only in Japanese locales
\_gettext("Convert to Kana")
, "html", null, true);
        yield "
        </label>
    </li>
</ul>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "encoding/kanji_encoding_form.twig";
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
        return array (  64 => 15,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<ul>
    <li>
        <input type=\"radio\" name=\"knjenc\" value=\"\" checked id=\"kj-none\">
        <label for=\"kj-none\">
          {{ t('None', context = 'None encoding conversion', notes = 'This is currently used only in Japanese locales') }}
        </label>
        <input type=\"radio\" name=\"knjenc\" value=\"EUC-JP\" id=\"kj-euc\">
        <label for=\"kj-euc\">EUC</label>
        <input type=\"radio\" name=\"knjenc\" value=\"SJIS\" id=\"kj-sjis\">
        <label for=\"kj-sjis\">SJIS</label>
    </li>
    <li>
        <input type=\"checkbox\" name=\"xkana\" value=\"kana\" id=\"kj-kana\">
        <label for=\"kj-kana\">
          {{ t('Convert to Kana', notes = 'This is currently used only in Japanese locales') }}
        </label>
    </li>
</ul>
", "encoding/kanji_encoding_form.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/encoding/kanji_encoding_form.twig");
    }
}

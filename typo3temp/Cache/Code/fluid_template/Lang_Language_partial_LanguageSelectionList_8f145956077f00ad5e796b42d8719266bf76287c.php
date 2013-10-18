<?php
class FluidCache_Lang_Language_partial_LanguageSelectionList_8f145956077f00ad5e796b42d8719266bf76287c extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments1 = array();
$arguments1['action'] = 'updateLanguageSelection';
$arguments1['name'] = 'languageSelectionForm';
$arguments1['object'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'languageSelectionForm', $renderingContext);
$arguments1['additionalAttributes'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['controller'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['pluginName'] = NULL;
$arguments1['pageUid'] = NULL;
$arguments1['pageType'] = 0;
$arguments1['noCache'] = false;
$arguments1['noCacheHash'] = false;
$arguments1['section'] = '';
$arguments1['format'] = '';
$arguments1['additionalParams'] = array (
);
$arguments1['absolute'] = false;
$arguments1['addQueryString'] = false;
$arguments1['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1['fieldNamePrefix'] = NULL;
$arguments1['actionUri'] = NULL;
$arguments1['objectName'] = NULL;
$arguments1['hiddenFieldClassName'] = NULL;
$arguments1['enctype'] = NULL;
$arguments1['method'] = NULL;
$arguments1['onreset'] = NULL;
$arguments1['onsubmit'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments4 = array();
$arguments4['name'] = 'languageSelectionForm[selectedLanguages][]';
$arguments4['additionalAttributes'] = NULL;
$arguments4['value'] = NULL;
$arguments4['property'] = NULL;
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper6->setArguments($arguments4);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output3 .= $viewHelper6->initializeArgumentsAndRender();

$output3 .= '
	<table border="0" cellpadding="0" cellspacing="0" class="gridTable selectionList">
		<thead>
			<tr>
				<td class="check notSortable"></td>
				<td class="language">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments7 = array();
$arguments7['key'] = 'table.language';
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['htmlEscape'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return 'Language';
};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper9->setArguments($arguments7);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output3 .= $viewHelper9->initializeArgumentsAndRender();

$output3 .= '</td>
				<td class="locale">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments10 = array();
$arguments10['key'] = 'table.locale';
$arguments10['id'] = NULL;
$arguments10['default'] = NULL;
$arguments10['htmlEscape'] = NULL;
$arguments10['arguments'] = NULL;
$arguments10['extensionName'] = NULL;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return 'Locale';
};
$viewHelper12 = $self->getViewHelper('$viewHelper12', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper12->setArguments($arguments10);
$viewHelper12->setRenderingContext($renderingContext);
$viewHelper12->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output3 .= $viewHelper12->initializeArgumentsAndRender();

$output3 .= '</td>
			</tr>
		</thead>
		<tbody>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments13 = array();
$arguments13['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'languageSelectionForm.languages', $renderingContext);
$arguments13['as'] = 'language';
$arguments13['iteration'] = 'iteration';
$arguments13['key'] = '';
$arguments13['reverse'] = false;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
				<tr class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments16 = array();
// Rendering Boolean node
$arguments16['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'language.selected', $renderingContext));
$arguments16['then'] = 'selected';
$arguments16['else'] = '';
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper18 = $self->getViewHelper('$viewHelper18', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper18->setArguments($arguments16);
$viewHelper18->setRenderingContext($renderingContext);
$viewHelper18->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output15 .= $viewHelper18->initializeArgumentsAndRender();

$output15 .= '">
					<td class="check">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$arguments19 = array();
$output20 = '';

$output20 .= 'languageSelectionForm[selectedLanguages][';

$output20 .= TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'iteration.index', $renderingContext);

$output20 .= ']';
$arguments19['name'] = $output20;
$arguments19['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'language.locale', $renderingContext);
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments21 = array();
// Rendering Boolean node
$arguments21['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'language.selected', $renderingContext));
$arguments21['then'] = 'checked';
$arguments21['else'] = '';
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper23 = $self->getViewHelper('$viewHelper23', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper23->setArguments($arguments21);
$viewHelper23->setRenderingContext($renderingContext);
$viewHelper23->setRenderChildrenClosure($renderChildrenClosure22);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments19['checked'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper23->initializeArgumentsAndRender());
$output24 = '';

$output24 .= 'locale-';

$output24 .= TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'language.locale', $renderingContext);
$arguments19['id'] = $output24;
$arguments19['additionalAttributes'] = NULL;
$arguments19['property'] = NULL;
$arguments19['disabled'] = NULL;
$arguments19['errorClass'] = 'f3-form-error';
$arguments19['class'] = NULL;
$arguments19['dir'] = NULL;
$arguments19['lang'] = NULL;
$arguments19['style'] = NULL;
$arguments19['title'] = NULL;
$arguments19['accesskey'] = NULL;
$arguments19['tabindex'] = NULL;
$arguments19['onclick'] = NULL;
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper26 = $self->getViewHelper('$viewHelper26', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper');
$viewHelper26->setArguments($arguments19);
$viewHelper26->setRenderingContext($renderingContext);
$viewHelper26->setRenderChildrenClosure($renderChildrenClosure25);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper

$output15 .= $viewHelper26->initializeArgumentsAndRender();

$output15 .= '</td>
					<td class="language"><label for="locale-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments27 = array();
$arguments27['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'language.locale', $renderingContext);
$arguments27['keepQuotes'] = false;
$arguments27['encoding'] = NULL;
$arguments27['doubleEncode'] = true;
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$value29 = ($arguments27['value'] !== NULL ? $arguments27['value'] : $renderChildrenClosure28());

$output15 .= (!is_string($value29) ? $value29 : htmlspecialchars($value29, ($arguments27['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments27['encoding'] !== NULL ? $arguments27['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments27['doubleEncode']));

$output15 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments30 = array();
$arguments30['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'language.language', $renderingContext);
$arguments30['keepQuotes'] = false;
$arguments30['encoding'] = NULL;
$arguments30['doubleEncode'] = true;
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$value32 = ($arguments30['value'] !== NULL ? $arguments30['value'] : $renderChildrenClosure31());

$output15 .= (!is_string($value32) ? $value32 : htmlspecialchars($value32, ($arguments30['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments30['encoding'] !== NULL ? $arguments30['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments30['doubleEncode']));

$output15 .= '</label></td>
					<td class="locale"><label for="locale-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments33 = array();
$arguments33['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'language.locale', $renderingContext);
$arguments33['keepQuotes'] = false;
$arguments33['encoding'] = NULL;
$arguments33['doubleEncode'] = true;
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$value35 = ($arguments33['value'] !== NULL ? $arguments33['value'] : $renderChildrenClosure34());

$output15 .= (!is_string($value35) ? $value35 : htmlspecialchars($value35, ($arguments33['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments33['encoding'] !== NULL ? $arguments33['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments33['doubleEncode']));

$output15 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments36 = array();
$arguments36['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'language.locale', $renderingContext);
$arguments36['keepQuotes'] = false;
$arguments36['encoding'] = NULL;
$arguments36['doubleEncode'] = true;
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$value38 = ($arguments36['value'] !== NULL ? $arguments36['value'] : $renderChildrenClosure37());

$output15 .= (!is_string($value38) ? $value38 : htmlspecialchars($value38, ($arguments36['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments36['encoding'] !== NULL ? $arguments36['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments36['doubleEncode']));

$output15 .= '</label></td>
				</tr>
			';
return $output15;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output3 .= '
		</tbody>
	</table>
';
return $output3;
};
$viewHelper39 = $self->getViewHelper('$viewHelper39', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper39->setArguments($arguments1);
$viewHelper39->setRenderingContext($renderingContext);
$viewHelper39->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output0 .= $viewHelper39->initializeArgumentsAndRender();

return $output0;
}


}
#1382106703    13988     
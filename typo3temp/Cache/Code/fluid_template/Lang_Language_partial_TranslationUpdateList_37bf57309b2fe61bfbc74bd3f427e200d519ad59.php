<?php
class FluidCache_Lang_Language_partial_TranslationUpdateList_37bf57309b2fe61bfbc74bd3f427e200d519ad59 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

<table border="0" cellpadding="0" cellspacing="0" class="gridTable translationList">
	<thead>
		<tr>
			<td class="icon notSortable"></td>
			<td class="extension">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1 = array();
$arguments1['key'] = 'table.extension';
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return 'Extension';
};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '</td>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments4 = array();
$arguments4['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'languageSelectionForm.selectedLanguages', $renderingContext);
$arguments4['as'] = 'selectedLanguage';
$arguments4['key'] = '';
$arguments4['reverse'] = false;
$arguments4['iteration'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
				<td class="language notSortable">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments7 = array();
$arguments7['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'selectedLanguage.language', $renderingContext);
$arguments7['keepQuotes'] = false;
$arguments7['encoding'] = NULL;
$arguments7['doubleEncode'] = true;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$value9 = ($arguments7['value'] !== NULL ? $arguments7['value'] : $renderChildrenClosure8());

$output6 .= (!is_string($value9) ? $value9 : htmlspecialchars($value9, ($arguments7['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments7['encoding'] !== NULL ? $arguments7['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments7['doubleEncode']));

$output6 .= '</td>
			';
return $output6;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
		</tr>
	</thead>
	<tbody>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments10 = array();
$arguments10['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extensions', $renderingContext);
$arguments10['as'] = 'extension';
$arguments10['key'] = '';
$arguments10['reverse'] = false;
$arguments10['iteration'] = NULL;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
			<tr
				class="translationListRow"
				data-updateurl="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments13 = array();
$arguments13['action'] = 'updateTranslation';
// Rendering Array
$array14 = array();
$array14['extension'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.key', $renderingContext);
$array14['locales'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'languageSelectionForm.selectedLanguagesLocaleList', $renderingContext);
$arguments13['arguments'] = $array14;
$arguments13['controller'] = NULL;
$arguments13['extensionName'] = NULL;
$arguments13['pluginName'] = NULL;
$arguments13['pageUid'] = NULL;
$arguments13['pageType'] = 0;
$arguments13['noCache'] = false;
$arguments13['noCacheHash'] = false;
$arguments13['section'] = '';
$arguments13['format'] = '';
$arguments13['linkAccessRestrictedPages'] = false;
$arguments13['additionalParams'] = array (
);
$arguments13['absolute'] = false;
$arguments13['addQueryString'] = false;
$arguments13['argumentsToBeExcludedFromQueryString'] = array (
);
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper16 = $self->getViewHelper('$viewHelper16', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper16->setArguments($arguments13);
$viewHelper16->setRenderingContext($renderingContext);
$viewHelper16->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper

$output12 .= $viewHelper16->initializeArgumentsAndRender();

$output12 .= '"
			>
				<td class="icon">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments17 = array();
// Rendering Boolean node
$arguments17['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.icon', $renderingContext));
$arguments17['then'] = NULL;
$arguments17['else'] = NULL;
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments19 = array();
$arguments19['src'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.icon', $renderingContext);
$arguments19['alt'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.key', $renderingContext);
$arguments19['additionalAttributes'] = NULL;
$arguments19['width'] = NULL;
$arguments19['height'] = NULL;
$arguments19['minWidth'] = NULL;
$arguments19['minHeight'] = NULL;
$arguments19['maxWidth'] = NULL;
$arguments19['maxHeight'] = NULL;
$arguments19['treatIdAsReference'] = false;
$arguments19['class'] = NULL;
$arguments19['dir'] = NULL;
$arguments19['id'] = NULL;
$arguments19['lang'] = NULL;
$arguments19['style'] = NULL;
$arguments19['title'] = NULL;
$arguments19['accesskey'] = NULL;
$arguments19['tabindex'] = NULL;
$arguments19['onclick'] = NULL;
$arguments19['ismap'] = NULL;
$arguments19['longdesc'] = NULL;
$arguments19['usemap'] = NULL;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper21 = $self->getViewHelper('$viewHelper21', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper21->setArguments($arguments19);
$viewHelper21->setRenderingContext($renderingContext);
$viewHelper21->setRenderChildrenClosure($renderChildrenClosure20);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
return $viewHelper21->initializeArgumentsAndRender();
};
$viewHelper22 = $self->getViewHelper('$viewHelper22', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper22->setArguments($arguments17);
$viewHelper22->setRenderingContext($renderingContext);
$viewHelper22->setRenderChildrenClosure($renderChildrenClosure18);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output12 .= $viewHelper22->initializeArgumentsAndRender();

$output12 .= '
				</td>
				<td class="extension">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments23 = array();
$arguments23['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.key', $renderingContext);
$arguments23['keepQuotes'] = false;
$arguments23['encoding'] = NULL;
$arguments23['doubleEncode'] = true;
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$value25 = ($arguments23['value'] !== NULL ? $arguments23['value'] : $renderChildrenClosure24());

$output12 .= (!is_string($value25) ? $value25 : htmlspecialchars($value25, ($arguments23['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments23['encoding'] !== NULL ? $arguments23['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments23['doubleEncode']));

$output12 .= '</td>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments26 = array();
$arguments26['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'languageSelectionForm.selectedLanguages', $renderingContext);
$arguments26['as'] = 'selectedLanguage';
$arguments26['key'] = '';
$arguments26['reverse'] = false;
$arguments26['iteration'] = NULL;
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
					<td
						class="language languageStateNone translationListCell"
						data-extension="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments29 = array();
$arguments29['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.key', $renderingContext);
$arguments29['keepQuotes'] = false;
$arguments29['encoding'] = NULL;
$arguments29['doubleEncode'] = true;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$value31 = ($arguments29['value'] !== NULL ? $arguments29['value'] : $renderChildrenClosure30());

$output28 .= (!is_string($value31) ? $value31 : htmlspecialchars($value31, ($arguments29['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments29['encoding'] !== NULL ? $arguments29['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments29['doubleEncode']));

$output28 .= '"
						data-locale="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments32 = array();
$arguments32['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'selectedLanguage.locale', $renderingContext);
$arguments32['keepQuotes'] = false;
$arguments32['encoding'] = NULL;
$arguments32['doubleEncode'] = true;
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$value34 = ($arguments32['value'] !== NULL ? $arguments32['value'] : $renderChildrenClosure33());

$output28 .= (!is_string($value34) ? $value34 : htmlspecialchars($value34, ($arguments32['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments32['encoding'] !== NULL ? $arguments32['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments32['doubleEncode']));

$output28 .= '"
						data-updateurl="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments35 = array();
$arguments35['action'] = 'updateTranslation';
// Rendering Array
$array36 = array();
$array36['extension'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.key', $renderingContext);
$array36['locales'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'selectedLanguage.locale', $renderingContext);
$arguments35['arguments'] = $array36;
$arguments35['controller'] = NULL;
$arguments35['extensionName'] = NULL;
$arguments35['pluginName'] = NULL;
$arguments35['pageUid'] = NULL;
$arguments35['pageType'] = 0;
$arguments35['noCache'] = false;
$arguments35['noCacheHash'] = false;
$arguments35['section'] = '';
$arguments35['format'] = '';
$arguments35['linkAccessRestrictedPages'] = false;
$arguments35['additionalParams'] = array (
);
$arguments35['absolute'] = false;
$arguments35['addQueryString'] = false;
$arguments35['argumentsToBeExcludedFromQueryString'] = array (
);
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper38 = $self->getViewHelper('$viewHelper38', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper38->setArguments($arguments35);
$viewHelper38->setRenderingContext($renderingContext);
$viewHelper38->setRenderChildrenClosure($renderChildrenClosure37);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper

$output28 .= $viewHelper38->initializeArgumentsAndRender();

$output28 .= '"
					>
						<span class="stateIcon stateIconNone">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments39 = array();
$arguments39['key'] = 'state.notChecked';
$arguments39['id'] = NULL;
$arguments39['default'] = NULL;
$arguments39['htmlEscape'] = NULL;
$arguments39['arguments'] = NULL;
$arguments39['extensionName'] = NULL;
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper41 = $self->getViewHelper('$viewHelper41', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper41->setArguments($arguments39);
$viewHelper41->setRenderingContext($renderingContext);
$viewHelper41->setRenderChildrenClosure($renderChildrenClosure40);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output28 .= $viewHelper41->initializeArgumentsAndRender();

$output28 .= '</span>
					</td>
				';
return $output28;
};

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output12 .= '
			</tr>
		';
return $output12;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
	</tbody>
</table>';

return $output0;
}


}
#1382106703    14618     
<?php
class FluidCache_Lang_Language_action_index_e10c6b5997d942f4e681e400c9f35f25b3e4dba8 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {

return 'Default';
}
public function hasLayout() {
return TRUE;
}

/**
 * section iconButtons
 */
public function section_cfe02ef001375ab02a741661b53c8aacfcbfd7a0(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<span class="menuItem updateItem">';
// Rendering ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper
$arguments1 = array();
$arguments1['icon'] = 'actions-system-extension-download';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments2 = array();
$arguments2['key'] = 'button.update';
$arguments2['id'] = NULL;
$arguments2['default'] = NULL;
$arguments2['htmlEscape'] = NULL;
$arguments2['arguments'] = NULL;
$arguments2['extensionName'] = NULL;
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper4 = $self->getViewHelper('$viewHelper4', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper4->setArguments($arguments2);
$viewHelper4->setRenderingContext($renderingContext);
$viewHelper4->setRenderChildrenClosure($renderChildrenClosure3);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1['title'] = $viewHelper4->initializeArgumentsAndRender();
$arguments1['class'] = '';
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper');
$viewHelper6->setArguments($arguments1);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper

$output0 .= $viewHelper6->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments7 = array();
$arguments7['key'] = 'button.update';
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['htmlEscape'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper9->setArguments($arguments7);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output0 .= $viewHelper9->initializeArgumentsAndRender();

$output0 .= '</span>
	&nbsp;
	<span class="menuItem cancelItem">';
// Rendering ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper
$arguments10 = array();
$arguments10['icon'] = 'status-status-permission-denied';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments11 = array();
$arguments11['key'] = 'button.cancel';
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['htmlEscape'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper13 = $self->getViewHelper('$viewHelper13', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper13->setArguments($arguments11);
$viewHelper13->setRenderingContext($renderingContext);
$viewHelper13->setRenderChildrenClosure($renderChildrenClosure12);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments10['title'] = $viewHelper13->initializeArgumentsAndRender();
$arguments10['class'] = '';
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper');
$viewHelper15->setArguments($arguments10);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper

$output0 .= $viewHelper15->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments16 = array();
$arguments16['key'] = 'button.cancel';
$arguments16['id'] = NULL;
$arguments16['default'] = NULL;
$arguments16['htmlEscape'] = NULL;
$arguments16['arguments'] = NULL;
$arguments16['extensionName'] = NULL;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper18 = $self->getViewHelper('$viewHelper18', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper18->setArguments($arguments16);
$viewHelper18->setRenderingContext($renderingContext);
$viewHelper18->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output0 .= $viewHelper18->initializeArgumentsAndRender();

$output0 .= '</span>
';

return $output0;
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output19 = '';

$output19 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments20 = array();
$arguments20['renderMode'] = 'div';
$arguments20['additionalAttributes'] = NULL;
$arguments20['class'] = NULL;
$arguments20['dir'] = NULL;
$arguments20['id'] = NULL;
$arguments20['lang'] = NULL;
$arguments20['style'] = NULL;
$arguments20['title'] = NULL;
$arguments20['accesskey'] = NULL;
$arguments20['tabindex'] = NULL;
$arguments20['onclick'] = NULL;
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper22 = $self->getViewHelper('$viewHelper22', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper22->setArguments($arguments20);
$viewHelper22->setRenderingContext($renderingContext);
$viewHelper22->setRenderChildrenClosure($renderChildrenClosure21);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output19 .= $viewHelper22->initializeArgumentsAndRender();

$output19 .= '

	<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments23 = array();
$arguments23['key'] = 'header.module';
$arguments23['id'] = NULL;
$arguments23['default'] = NULL;
$arguments23['htmlEscape'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['extensionName'] = NULL;
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper25 = $self->getViewHelper('$viewHelper25', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper25->setArguments($arguments23);
$viewHelper25->setRenderingContext($renderingContext);
$viewHelper25->setRenderChildrenClosure($renderChildrenClosure24);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output19 .= $viewHelper25->initializeArgumentsAndRender();

$output19 .= '</h2>
	<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td class="languageSelectionListContainer">
				<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments26 = array();
$arguments26['key'] = 'header.languageSelectionList';
$arguments26['id'] = NULL;
$arguments26['default'] = NULL;
$arguments26['htmlEscape'] = NULL;
$arguments26['arguments'] = NULL;
$arguments26['extensionName'] = NULL;
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper28 = $self->getViewHelper('$viewHelper28', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper28->setArguments($arguments26);
$viewHelper28->setRenderingContext($renderingContext);
$viewHelper28->setRenderChildrenClosure($renderChildrenClosure27);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output19 .= $viewHelper28->initializeArgumentsAndRender();

$output19 .= '</h3>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments29 = array();
$arguments29['partial'] = 'LanguageSelectionList';
$arguments29['arguments'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), '_all', $renderingContext);
$arguments29['section'] = NULL;
$arguments29['optional'] = false;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper31 = $self->getViewHelper('$viewHelper31', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper31->setArguments($arguments29);
$viewHelper31->setRenderingContext($renderingContext);
$viewHelper31->setRenderChildrenClosure($renderChildrenClosure30);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output19 .= $viewHelper31->initializeArgumentsAndRender();

$output19 .= '
			</td>
			<td class="translationUpdateListContainer">
				<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments32 = array();
$arguments32['key'] = 'header.translationUpdateList';
$arguments32['id'] = NULL;
$arguments32['default'] = NULL;
$arguments32['htmlEscape'] = NULL;
$arguments32['arguments'] = NULL;
$arguments32['extensionName'] = NULL;
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper34 = $self->getViewHelper('$viewHelper34', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper34->setArguments($arguments32);
$viewHelper34->setRenderingContext($renderingContext);
$viewHelper34->setRenderChildrenClosure($renderChildrenClosure33);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output19 .= $viewHelper34->initializeArgumentsAndRender();

$output19 .= '</h3>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments35 = array();
$arguments35['partial'] = 'TranslationUpdateList';
$arguments35['arguments'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), '_all', $renderingContext);
$arguments35['section'] = NULL;
$arguments35['optional'] = false;
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper37 = $self->getViewHelper('$viewHelper37', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper37->setArguments($arguments35);
$viewHelper37->setRenderingContext($renderingContext);
$viewHelper37->setRenderChildrenClosure($renderChildrenClosure36);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output19 .= $viewHelper37->initializeArgumentsAndRender();

$output19 .= '
			</td>
		</tr>
	</table>

	<div style="display: none;">
		<span class="stateIcon" id="stateIconError">
			';
// Rendering ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper
$arguments38 = array();
$arguments38['icon'] = 'status-status-permission-denied';
$arguments38['class'] = 'stateIcon';
$arguments38['title'] = '';
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper40 = $self->getViewHelper('$viewHelper40', $renderingContext, 'TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper');
$viewHelper40->setArguments($arguments38);
$viewHelper40->setRenderingContext($renderingContext);
$viewHelper40->setRenderChildrenClosure($renderChildrenClosure39);
// End of ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper

$output19 .= $viewHelper40->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments41 = array();
$arguments41['key'] = 'state.error';
$arguments41['id'] = NULL;
$arguments41['default'] = NULL;
$arguments41['htmlEscape'] = NULL;
$arguments41['arguments'] = NULL;
$arguments41['extensionName'] = NULL;
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper43 = $self->getViewHelper('$viewHelper43', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper43->setArguments($arguments41);
$viewHelper43->setRenderingContext($renderingContext);
$viewHelper43->setRenderChildrenClosure($renderChildrenClosure42);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output19 .= $viewHelper43->initializeArgumentsAndRender();

$output19 .= '
		</span>
		<span class="stateIcon" id="stateIcon0">
			';
// Rendering ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper
$arguments44 = array();
$arguments44['icon'] = 'actions-document-info';
$arguments44['class'] = 'stateIcon';
$arguments44['title'] = '';
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper46 = $self->getViewHelper('$viewHelper46', $renderingContext, 'TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper');
$viewHelper46->setArguments($arguments44);
$viewHelper46->setRenderingContext($renderingContext);
$viewHelper46->setRenderChildrenClosure($renderChildrenClosure45);
// End of ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper

$output19 .= $viewHelper46->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments47 = array();
$arguments47['key'] = 'state.notAvailable';
$arguments47['id'] = NULL;
$arguments47['default'] = NULL;
$arguments47['htmlEscape'] = NULL;
$arguments47['arguments'] = NULL;
$arguments47['extensionName'] = NULL;
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper49 = $self->getViewHelper('$viewHelper49', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper49->setArguments($arguments47);
$viewHelper49->setRenderingContext($renderingContext);
$viewHelper49->setRenderChildrenClosure($renderChildrenClosure48);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output19 .= $viewHelper49->initializeArgumentsAndRender();

$output19 .= '
		</span>
		<span class="stateIcon" id="stateIcon1">
			';
// Rendering ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper
$arguments50 = array();
$arguments50['icon'] = 'actions-system-extension-update';
$arguments50['class'] = 'stateIcon';
$arguments50['title'] = '';
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper52 = $self->getViewHelper('$viewHelper52', $renderingContext, 'TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper');
$viewHelper52->setArguments($arguments50);
$viewHelper52->setRenderingContext($renderingContext);
$viewHelper52->setRenderChildrenClosure($renderChildrenClosure51);
// End of ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper

$output19 .= $viewHelper52->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments53 = array();
$arguments53['key'] = 'state.updateAvailable';
$arguments53['id'] = NULL;
$arguments53['default'] = NULL;
$arguments53['htmlEscape'] = NULL;
$arguments53['arguments'] = NULL;
$arguments53['extensionName'] = NULL;
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper55 = $self->getViewHelper('$viewHelper55', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper55->setArguments($arguments53);
$viewHelper55->setRenderingContext($renderingContext);
$viewHelper55->setRenderChildrenClosure($renderChildrenClosure54);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output19 .= $viewHelper55->initializeArgumentsAndRender();

$output19 .= '
		</span>
		<span class="stateIcon" id="stateIcon2">
			';
// Rendering ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper
$arguments56 = array();
$arguments56['icon'] = 'status-status-permission-denied';
$arguments56['class'] = 'stateIcon';
$arguments56['title'] = '';
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper58 = $self->getViewHelper('$viewHelper58', $renderingContext, 'TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper');
$viewHelper58->setArguments($arguments56);
$viewHelper58->setRenderingContext($renderingContext);
$viewHelper58->setRenderChildrenClosure($renderChildrenClosure57);
// End of ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper

$output19 .= $viewHelper58->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments59 = array();
$arguments59['key'] = 'state.failed';
$arguments59['id'] = NULL;
$arguments59['default'] = NULL;
$arguments59['htmlEscape'] = NULL;
$arguments59['arguments'] = NULL;
$arguments59['extensionName'] = NULL;
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper61 = $self->getViewHelper('$viewHelper61', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper61->setArguments($arguments59);
$viewHelper61->setRenderingContext($renderingContext);
$viewHelper61->setRenderChildrenClosure($renderChildrenClosure60);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output19 .= $viewHelper61->initializeArgumentsAndRender();

$output19 .= '
		</span>
		<span class="stateIcon" id="stateIcon3">
			';
// Rendering ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper
$arguments62 = array();
$arguments62['icon'] = 'status-status-checked';
$arguments62['class'] = 'stateIcon';
$arguments62['title'] = '';
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper64 = $self->getViewHelper('$viewHelper64', $renderingContext, 'TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper');
$viewHelper64->setArguments($arguments62);
$viewHelper64->setRenderingContext($renderingContext);
$viewHelper64->setRenderChildrenClosure($renderChildrenClosure63);
// End of ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper

$output19 .= $viewHelper64->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments65 = array();
$arguments65['key'] = 'state.upToDate';
$arguments65['id'] = NULL;
$arguments65['default'] = NULL;
$arguments65['htmlEscape'] = NULL;
$arguments65['arguments'] = NULL;
$arguments65['extensionName'] = NULL;
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper67 = $self->getViewHelper('$viewHelper67', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper67->setArguments($arguments65);
$viewHelper67->setRenderingContext($renderingContext);
$viewHelper67->setRenderChildrenClosure($renderChildrenClosure66);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output19 .= $viewHelper67->initializeArgumentsAndRender();

$output19 .= '
		</span>
		<span class="stateIcon" id="stateIcon4">
			';
// Rendering ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper
$arguments68 = array();
$arguments68['icon'] = 'status-status-permission-denied';
$arguments68['class'] = 'stateIcon';
$arguments68['title'] = '';
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper70 = $self->getViewHelper('$viewHelper70', $renderingContext, 'TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper');
$viewHelper70->setArguments($arguments68);
$viewHelper70->setRenderingContext($renderingContext);
$viewHelper70->setRenderChildrenClosure($renderChildrenClosure69);
// End of ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper

$output19 .= $viewHelper70->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments71 = array();
$arguments71['key'] = 'state.invalid';
$arguments71['id'] = NULL;
$arguments71['default'] = NULL;
$arguments71['htmlEscape'] = NULL;
$arguments71['arguments'] = NULL;
$arguments71['extensionName'] = NULL;
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper73 = $self->getViewHelper('$viewHelper73', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper73->setArguments($arguments71);
$viewHelper73->setRenderingContext($renderingContext);
$viewHelper73->setRenderChildrenClosure($renderChildrenClosure72);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output19 .= $viewHelper73->initializeArgumentsAndRender();

$output19 .= '
		</span>
		<span class="stateIcon" id="stateIcon5">
			';
// Rendering ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper
$arguments74 = array();
$arguments74['icon'] = 'status-status-checked';
$arguments74['class'] = 'stateIcon';
$arguments74['title'] = '';
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper76 = $self->getViewHelper('$viewHelper76', $renderingContext, 'TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper');
$viewHelper76->setArguments($arguments74);
$viewHelper76->setRenderingContext($renderingContext);
$viewHelper76->setRenderChildrenClosure($renderChildrenClosure75);
// End of ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper

$output19 .= $viewHelper76->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments77 = array();
$arguments77['key'] = 'state.updated';
$arguments77['id'] = NULL;
$arguments77['default'] = NULL;
$arguments77['htmlEscape'] = NULL;
$arguments77['arguments'] = NULL;
$arguments77['extensionName'] = NULL;
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper79 = $self->getViewHelper('$viewHelper79', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper79->setArguments($arguments77);
$viewHelper79->setRenderingContext($renderingContext);
$viewHelper79->setRenderChildrenClosure($renderChildrenClosure78);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output19 .= $viewHelper79->initializeArgumentsAndRender();

$output19 .= '
		</span>
		<span class="stateIcon" id="stateIconChecking">
			<span class="stateIcon stateIconChecking">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments80 = array();
$arguments80['key'] = 'state.checking';
$arguments80['id'] = NULL;
$arguments80['default'] = NULL;
$arguments80['htmlEscape'] = NULL;
$arguments80['arguments'] = NULL;
$arguments80['extensionName'] = NULL;
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper82 = $self->getViewHelper('$viewHelper82', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper82->setArguments($arguments80);
$viewHelper82->setRenderingContext($renderingContext);
$viewHelper82->setRenderChildrenClosure($renderChildrenClosure81);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output19 .= $viewHelper82->initializeArgumentsAndRender();

$output19 .= '</span>
		</span>
		<span class="stateIcon" id="stateIconNone">
			<span class="stateIcon stateIconNone">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments83 = array();
$arguments83['key'] = 'state.notChecked';
$arguments83['id'] = NULL;
$arguments83['default'] = NULL;
$arguments83['htmlEscape'] = NULL;
$arguments83['arguments'] = NULL;
$arguments83['extensionName'] = NULL;
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper85 = $self->getViewHelper('$viewHelper85', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper85->setArguments($arguments83);
$viewHelper85->setRenderingContext($renderingContext);
$viewHelper85->setRenderChildrenClosure($renderChildrenClosure84);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output19 .= $viewHelper85->initializeArgumentsAndRender();

$output19 .= '</span>
		</span>
	</div>
';

return $output19;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output86 = '';

$output86 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments87 = array();
$arguments87['name'] = 'Default';
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper89 = $self->getViewHelper('$viewHelper89', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper89->setArguments($arguments87);
$viewHelper89->setRenderingContext($renderingContext);
$viewHelper89->setRenderChildrenClosure($renderChildrenClosure88);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output86 .= $viewHelper89->initializeArgumentsAndRender();

$output86 .= '


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments90 = array();
$arguments90['name'] = 'iconButtons';
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$output92 = '';

$output92 .= '
	<span class="menuItem updateItem">';
// Rendering ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper
$arguments93 = array();
$arguments93['icon'] = 'actions-system-extension-download';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments94 = array();
$arguments94['key'] = 'button.update';
$arguments94['id'] = NULL;
$arguments94['default'] = NULL;
$arguments94['htmlEscape'] = NULL;
$arguments94['arguments'] = NULL;
$arguments94['extensionName'] = NULL;
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper96 = $self->getViewHelper('$viewHelper96', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper96->setArguments($arguments94);
$viewHelper96->setRenderingContext($renderingContext);
$viewHelper96->setRenderChildrenClosure($renderChildrenClosure95);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments93['title'] = $viewHelper96->initializeArgumentsAndRender();
$arguments93['class'] = '';
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper98 = $self->getViewHelper('$viewHelper98', $renderingContext, 'TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper');
$viewHelper98->setArguments($arguments93);
$viewHelper98->setRenderingContext($renderingContext);
$viewHelper98->setRenderChildrenClosure($renderChildrenClosure97);
// End of ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper

$output92 .= $viewHelper98->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments99 = array();
$arguments99['key'] = 'button.update';
$arguments99['id'] = NULL;
$arguments99['default'] = NULL;
$arguments99['htmlEscape'] = NULL;
$arguments99['arguments'] = NULL;
$arguments99['extensionName'] = NULL;
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper101 = $self->getViewHelper('$viewHelper101', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper101->setArguments($arguments99);
$viewHelper101->setRenderingContext($renderingContext);
$viewHelper101->setRenderChildrenClosure($renderChildrenClosure100);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output92 .= $viewHelper101->initializeArgumentsAndRender();

$output92 .= '</span>
	&nbsp;
	<span class="menuItem cancelItem">';
// Rendering ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper
$arguments102 = array();
$arguments102['icon'] = 'status-status-permission-denied';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments103 = array();
$arguments103['key'] = 'button.cancel';
$arguments103['id'] = NULL;
$arguments103['default'] = NULL;
$arguments103['htmlEscape'] = NULL;
$arguments103['arguments'] = NULL;
$arguments103['extensionName'] = NULL;
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper105 = $self->getViewHelper('$viewHelper105', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper105->setArguments($arguments103);
$viewHelper105->setRenderingContext($renderingContext);
$viewHelper105->setRenderChildrenClosure($renderChildrenClosure104);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments102['title'] = $viewHelper105->initializeArgumentsAndRender();
$arguments102['class'] = '';
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper107 = $self->getViewHelper('$viewHelper107', $renderingContext, 'TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper');
$viewHelper107->setArguments($arguments102);
$viewHelper107->setRenderingContext($renderingContext);
$viewHelper107->setRenderChildrenClosure($renderChildrenClosure106);
// End of ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper

$output92 .= $viewHelper107->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments108 = array();
$arguments108['key'] = 'button.cancel';
$arguments108['id'] = NULL;
$arguments108['default'] = NULL;
$arguments108['htmlEscape'] = NULL;
$arguments108['arguments'] = NULL;
$arguments108['extensionName'] = NULL;
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper110 = $self->getViewHelper('$viewHelper110', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper110->setArguments($arguments108);
$viewHelper110->setRenderingContext($renderingContext);
$viewHelper110->setRenderChildrenClosure($renderChildrenClosure109);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output92 .= $viewHelper110->initializeArgumentsAndRender();

$output92 .= '</span>
';
return $output92;
};

$output86 .= '';

$output86 .= '


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments111 = array();
$arguments111['name'] = 'content';
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments114 = array();
$arguments114['renderMode'] = 'div';
$arguments114['additionalAttributes'] = NULL;
$arguments114['class'] = NULL;
$arguments114['dir'] = NULL;
$arguments114['id'] = NULL;
$arguments114['lang'] = NULL;
$arguments114['style'] = NULL;
$arguments114['title'] = NULL;
$arguments114['accesskey'] = NULL;
$arguments114['tabindex'] = NULL;
$arguments114['onclick'] = NULL;
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper116 = $self->getViewHelper('$viewHelper116', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper116->setArguments($arguments114);
$viewHelper116->setRenderingContext($renderingContext);
$viewHelper116->setRenderChildrenClosure($renderChildrenClosure115);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output113 .= $viewHelper116->initializeArgumentsAndRender();

$output113 .= '

	<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments117 = array();
$arguments117['key'] = 'header.module';
$arguments117['id'] = NULL;
$arguments117['default'] = NULL;
$arguments117['htmlEscape'] = NULL;
$arguments117['arguments'] = NULL;
$arguments117['extensionName'] = NULL;
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper119 = $self->getViewHelper('$viewHelper119', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper119->setArguments($arguments117);
$viewHelper119->setRenderingContext($renderingContext);
$viewHelper119->setRenderChildrenClosure($renderChildrenClosure118);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output113 .= $viewHelper119->initializeArgumentsAndRender();

$output113 .= '</h2>
	<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td class="languageSelectionListContainer">
				<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments120 = array();
$arguments120['key'] = 'header.languageSelectionList';
$arguments120['id'] = NULL;
$arguments120['default'] = NULL;
$arguments120['htmlEscape'] = NULL;
$arguments120['arguments'] = NULL;
$arguments120['extensionName'] = NULL;
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper122 = $self->getViewHelper('$viewHelper122', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper122->setArguments($arguments120);
$viewHelper122->setRenderingContext($renderingContext);
$viewHelper122->setRenderChildrenClosure($renderChildrenClosure121);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output113 .= $viewHelper122->initializeArgumentsAndRender();

$output113 .= '</h3>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments123 = array();
$arguments123['partial'] = 'LanguageSelectionList';
$arguments123['arguments'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), '_all', $renderingContext);
$arguments123['section'] = NULL;
$arguments123['optional'] = false;
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper125 = $self->getViewHelper('$viewHelper125', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper125->setArguments($arguments123);
$viewHelper125->setRenderingContext($renderingContext);
$viewHelper125->setRenderChildrenClosure($renderChildrenClosure124);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output113 .= $viewHelper125->initializeArgumentsAndRender();

$output113 .= '
			</td>
			<td class="translationUpdateListContainer">
				<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments126 = array();
$arguments126['key'] = 'header.translationUpdateList';
$arguments126['id'] = NULL;
$arguments126['default'] = NULL;
$arguments126['htmlEscape'] = NULL;
$arguments126['arguments'] = NULL;
$arguments126['extensionName'] = NULL;
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper128 = $self->getViewHelper('$viewHelper128', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper128->setArguments($arguments126);
$viewHelper128->setRenderingContext($renderingContext);
$viewHelper128->setRenderChildrenClosure($renderChildrenClosure127);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output113 .= $viewHelper128->initializeArgumentsAndRender();

$output113 .= '</h3>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments129 = array();
$arguments129['partial'] = 'TranslationUpdateList';
$arguments129['arguments'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), '_all', $renderingContext);
$arguments129['section'] = NULL;
$arguments129['optional'] = false;
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper131 = $self->getViewHelper('$viewHelper131', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper131->setArguments($arguments129);
$viewHelper131->setRenderingContext($renderingContext);
$viewHelper131->setRenderChildrenClosure($renderChildrenClosure130);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output113 .= $viewHelper131->initializeArgumentsAndRender();

$output113 .= '
			</td>
		</tr>
	</table>

	<div style="display: none;">
		<span class="stateIcon" id="stateIconError">
			';
// Rendering ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper
$arguments132 = array();
$arguments132['icon'] = 'status-status-permission-denied';
$arguments132['class'] = 'stateIcon';
$arguments132['title'] = '';
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper134 = $self->getViewHelper('$viewHelper134', $renderingContext, 'TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper');
$viewHelper134->setArguments($arguments132);
$viewHelper134->setRenderingContext($renderingContext);
$viewHelper134->setRenderChildrenClosure($renderChildrenClosure133);
// End of ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper

$output113 .= $viewHelper134->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments135 = array();
$arguments135['key'] = 'state.error';
$arguments135['id'] = NULL;
$arguments135['default'] = NULL;
$arguments135['htmlEscape'] = NULL;
$arguments135['arguments'] = NULL;
$arguments135['extensionName'] = NULL;
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper137 = $self->getViewHelper('$viewHelper137', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper137->setArguments($arguments135);
$viewHelper137->setRenderingContext($renderingContext);
$viewHelper137->setRenderChildrenClosure($renderChildrenClosure136);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output113 .= $viewHelper137->initializeArgumentsAndRender();

$output113 .= '
		</span>
		<span class="stateIcon" id="stateIcon0">
			';
// Rendering ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper
$arguments138 = array();
$arguments138['icon'] = 'actions-document-info';
$arguments138['class'] = 'stateIcon';
$arguments138['title'] = '';
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper140 = $self->getViewHelper('$viewHelper140', $renderingContext, 'TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper');
$viewHelper140->setArguments($arguments138);
$viewHelper140->setRenderingContext($renderingContext);
$viewHelper140->setRenderChildrenClosure($renderChildrenClosure139);
// End of ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper

$output113 .= $viewHelper140->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments141 = array();
$arguments141['key'] = 'state.notAvailable';
$arguments141['id'] = NULL;
$arguments141['default'] = NULL;
$arguments141['htmlEscape'] = NULL;
$arguments141['arguments'] = NULL;
$arguments141['extensionName'] = NULL;
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper143 = $self->getViewHelper('$viewHelper143', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper143->setArguments($arguments141);
$viewHelper143->setRenderingContext($renderingContext);
$viewHelper143->setRenderChildrenClosure($renderChildrenClosure142);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output113 .= $viewHelper143->initializeArgumentsAndRender();

$output113 .= '
		</span>
		<span class="stateIcon" id="stateIcon1">
			';
// Rendering ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper
$arguments144 = array();
$arguments144['icon'] = 'actions-system-extension-update';
$arguments144['class'] = 'stateIcon';
$arguments144['title'] = '';
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper146 = $self->getViewHelper('$viewHelper146', $renderingContext, 'TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper');
$viewHelper146->setArguments($arguments144);
$viewHelper146->setRenderingContext($renderingContext);
$viewHelper146->setRenderChildrenClosure($renderChildrenClosure145);
// End of ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper

$output113 .= $viewHelper146->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments147 = array();
$arguments147['key'] = 'state.updateAvailable';
$arguments147['id'] = NULL;
$arguments147['default'] = NULL;
$arguments147['htmlEscape'] = NULL;
$arguments147['arguments'] = NULL;
$arguments147['extensionName'] = NULL;
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper149 = $self->getViewHelper('$viewHelper149', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper149->setArguments($arguments147);
$viewHelper149->setRenderingContext($renderingContext);
$viewHelper149->setRenderChildrenClosure($renderChildrenClosure148);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output113 .= $viewHelper149->initializeArgumentsAndRender();

$output113 .= '
		</span>
		<span class="stateIcon" id="stateIcon2">
			';
// Rendering ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper
$arguments150 = array();
$arguments150['icon'] = 'status-status-permission-denied';
$arguments150['class'] = 'stateIcon';
$arguments150['title'] = '';
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper152 = $self->getViewHelper('$viewHelper152', $renderingContext, 'TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper');
$viewHelper152->setArguments($arguments150);
$viewHelper152->setRenderingContext($renderingContext);
$viewHelper152->setRenderChildrenClosure($renderChildrenClosure151);
// End of ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper

$output113 .= $viewHelper152->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments153 = array();
$arguments153['key'] = 'state.failed';
$arguments153['id'] = NULL;
$arguments153['default'] = NULL;
$arguments153['htmlEscape'] = NULL;
$arguments153['arguments'] = NULL;
$arguments153['extensionName'] = NULL;
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper155 = $self->getViewHelper('$viewHelper155', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper155->setArguments($arguments153);
$viewHelper155->setRenderingContext($renderingContext);
$viewHelper155->setRenderChildrenClosure($renderChildrenClosure154);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output113 .= $viewHelper155->initializeArgumentsAndRender();

$output113 .= '
		</span>
		<span class="stateIcon" id="stateIcon3">
			';
// Rendering ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper
$arguments156 = array();
$arguments156['icon'] = 'status-status-checked';
$arguments156['class'] = 'stateIcon';
$arguments156['title'] = '';
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper158 = $self->getViewHelper('$viewHelper158', $renderingContext, 'TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper');
$viewHelper158->setArguments($arguments156);
$viewHelper158->setRenderingContext($renderingContext);
$viewHelper158->setRenderChildrenClosure($renderChildrenClosure157);
// End of ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper

$output113 .= $viewHelper158->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments159 = array();
$arguments159['key'] = 'state.upToDate';
$arguments159['id'] = NULL;
$arguments159['default'] = NULL;
$arguments159['htmlEscape'] = NULL;
$arguments159['arguments'] = NULL;
$arguments159['extensionName'] = NULL;
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper161 = $self->getViewHelper('$viewHelper161', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper161->setArguments($arguments159);
$viewHelper161->setRenderingContext($renderingContext);
$viewHelper161->setRenderChildrenClosure($renderChildrenClosure160);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output113 .= $viewHelper161->initializeArgumentsAndRender();

$output113 .= '
		</span>
		<span class="stateIcon" id="stateIcon4">
			';
// Rendering ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper
$arguments162 = array();
$arguments162['icon'] = 'status-status-permission-denied';
$arguments162['class'] = 'stateIcon';
$arguments162['title'] = '';
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper164 = $self->getViewHelper('$viewHelper164', $renderingContext, 'TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper');
$viewHelper164->setArguments($arguments162);
$viewHelper164->setRenderingContext($renderingContext);
$viewHelper164->setRenderChildrenClosure($renderChildrenClosure163);
// End of ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper

$output113 .= $viewHelper164->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments165 = array();
$arguments165['key'] = 'state.invalid';
$arguments165['id'] = NULL;
$arguments165['default'] = NULL;
$arguments165['htmlEscape'] = NULL;
$arguments165['arguments'] = NULL;
$arguments165['extensionName'] = NULL;
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper167 = $self->getViewHelper('$viewHelper167', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper167->setArguments($arguments165);
$viewHelper167->setRenderingContext($renderingContext);
$viewHelper167->setRenderChildrenClosure($renderChildrenClosure166);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output113 .= $viewHelper167->initializeArgumentsAndRender();

$output113 .= '
		</span>
		<span class="stateIcon" id="stateIcon5">
			';
// Rendering ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper
$arguments168 = array();
$arguments168['icon'] = 'status-status-checked';
$arguments168['class'] = 'stateIcon';
$arguments168['title'] = '';
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper170 = $self->getViewHelper('$viewHelper170', $renderingContext, 'TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper');
$viewHelper170->setArguments($arguments168);
$viewHelper170->setRenderingContext($renderingContext);
$viewHelper170->setRenderChildrenClosure($renderChildrenClosure169);
// End of ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\SpriteIconViewHelper

$output113 .= $viewHelper170->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments171 = array();
$arguments171['key'] = 'state.updated';
$arguments171['id'] = NULL;
$arguments171['default'] = NULL;
$arguments171['htmlEscape'] = NULL;
$arguments171['arguments'] = NULL;
$arguments171['extensionName'] = NULL;
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper173 = $self->getViewHelper('$viewHelper173', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper173->setArguments($arguments171);
$viewHelper173->setRenderingContext($renderingContext);
$viewHelper173->setRenderChildrenClosure($renderChildrenClosure172);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output113 .= $viewHelper173->initializeArgumentsAndRender();

$output113 .= '
		</span>
		<span class="stateIcon" id="stateIconChecking">
			<span class="stateIcon stateIconChecking">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments174 = array();
$arguments174['key'] = 'state.checking';
$arguments174['id'] = NULL;
$arguments174['default'] = NULL;
$arguments174['htmlEscape'] = NULL;
$arguments174['arguments'] = NULL;
$arguments174['extensionName'] = NULL;
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper176 = $self->getViewHelper('$viewHelper176', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper176->setArguments($arguments174);
$viewHelper176->setRenderingContext($renderingContext);
$viewHelper176->setRenderChildrenClosure($renderChildrenClosure175);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output113 .= $viewHelper176->initializeArgumentsAndRender();

$output113 .= '</span>
		</span>
		<span class="stateIcon" id="stateIconNone">
			<span class="stateIcon stateIconNone">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments177 = array();
$arguments177['key'] = 'state.notChecked';
$arguments177['id'] = NULL;
$arguments177['default'] = NULL;
$arguments177['htmlEscape'] = NULL;
$arguments177['arguments'] = NULL;
$arguments177['extensionName'] = NULL;
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper179 = $self->getViewHelper('$viewHelper179', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper179->setArguments($arguments177);
$viewHelper179->setRenderingContext($renderingContext);
$viewHelper179->setRenderChildrenClosure($renderChildrenClosure178);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output113 .= $viewHelper179->initializeArgumentsAndRender();

$output113 .= '</span>
		</span>
	</div>
';
return $output113;
};

$output86 .= '';

$output86 .= '
';

return $output86;
}


}
#1382106703    49896     
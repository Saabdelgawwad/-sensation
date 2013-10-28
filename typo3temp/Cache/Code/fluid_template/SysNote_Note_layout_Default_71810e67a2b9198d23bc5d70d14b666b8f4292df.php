<?php
class FluidCache_SysNote_Note_layout_Default_71810e67a2b9198d23bc5d70d14b666b8f4292df extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments0 = array();
$arguments0['section'] = 'Content';
$arguments0['partial'] = NULL;
$arguments0['arguments'] = array (
);
$arguments0['optional'] = false;
$renderChildrenClosure1 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper2 = $self->getViewHelper('$viewHelper2', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper2->setArguments($arguments0);
$viewHelper2->setRenderingContext($renderingContext);
$viewHelper2->setRenderChildrenClosure($renderChildrenClosure1);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

return $viewHelper2->initializeArgumentsAndRender();
}


}
#1382984718    1329      
<?php
/**
 * Index
 *
 * @copyright
 * @author    sushynskyiar@gmail.com
 */

namespace Blog\News\Controller\Adminhtml\Post;

/**
 * Class Index
 * @package Blog\News\Controller\Adminhtml\Post
 */
class Index extends \Magento\Backend\App\Action
{

    const ADMIN_RESOURCE = 'Blog_News::post';

    /**
     * @var bool|\Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory = false;

    /**
     * Index constructor.
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Blog_News::post');
        $resultPage->getConfig()->getTitle()->prepend((__('Posts')));
        return $resultPage;
    }
}

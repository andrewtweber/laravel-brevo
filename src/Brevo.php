<?php

declare(strict_types=1);

namespace Hofmannsven\Brevo;

use Brevo\Client\Api\AccountApi;
use Brevo\Client\Api\AttributesApi;
use Brevo\Client\Api\CompaniesApi;
use Brevo\Client\Api\ContactsApi;
use Brevo\Client\Api\ConversationsApi;
use Brevo\Client\Api\CouponsApi;
use Brevo\Client\Api\CRMApi;
use Brevo\Client\Api\DealsApi;
use Brevo\Client\Api\DomainsApi;
use Brevo\Client\Api\EcommerceApi;
use Brevo\Client\Api\EmailCampaignsApi;
use Brevo\Client\Api\ExternalFeedsApi;
use Brevo\Client\Api\FilesApi;
use Brevo\Client\Api\FoldersApi;
use Brevo\Client\Api\InboundParsingApi;
use Brevo\Client\Api\ListsApi;
use Brevo\Client\Api\MasterAccountApi;
use Brevo\Client\Api\NotesApi;
use Brevo\Client\Api\ProcessApi;
use Brevo\Client\Api\ResellerApi;
use Brevo\Client\Api\SendersApi;
use Brevo\Client\Api\SMSCampaignsApi;
use Brevo\Client\Api\TasksApi;
use Brevo\Client\Api\TransactionalEmailsApi;
use Brevo\Client\Api\TransactionalSMSApi;
use Brevo\Client\Api\TransactionalWhatsAppApi;
use Brevo\Client\Api\UserApi;
use Brevo\Client\Api\WebhooksApi;
use Brevo\Client\Api\WhatsAppCampaignsApi;
use Brevo\Client\Configuration;
use GuzzleHttp\Client;

class Brevo
{
    protected Configuration $configuration;

    public function __construct()
    {
        $this->configuration = Configuration::getDefaultConfiguration()->setApiKey('api-key', config('brevo.api_key'));

        if (config('brevo.partner_key')) {
            $this->configuration->setApiKey('partner-key', config('brevo.partner_key'));
        }
    }

    public function getConfiguration(): Configuration
    {
        return $this->configuration;
    }

    public function setConfiguration(Configuration $configuration): void
    {
        $this->configuration = $configuration;
    }

    public function account(): AccountApi
    {
        return new AccountApi(new Client(), $this->getConfiguration());
    }

    public function attributes(): AttributesApi
    {
        return new AttributesApi(new Client(), $this->getConfiguration());
    }

    public function crm(): CRMApi
    {
        return new CRMApi(new Client(), $this->getConfiguration());
    }

    public function companies(): CompaniesApi
    {
        return new CompaniesApi(new Client(), $this->getConfiguration());
    }

    public function contacts(): ContactsApi
    {
        return new ContactsApi(new Client(), $this->getConfiguration());
    }

    public function conversations(): ConversationsApi
    {
        return new ConversationsApi(new Client(), $this->getConfiguration());
    }

    public function coupons(): CouponsApi
    {
        return new CouponsApi(new Client(), $this->getConfiguration());
    }

    public function deals(): DealsApi
    {
        return new DealsApi(new Client(), $this->getConfiguration());
    }

    public function domains(): DomainsApi
    {
        return new DomainsApi(new Client(), $this->getConfiguration());
    }

    public function ecommerce(): EcommerceApi
    {
        return new EcommerceApi(new Client(), $this->getConfiguration());
    }

    public function emailCampaigns(): EmailCampaignsApi
    {
        return new EmailCampaignsApi(new Client(), $this->getConfiguration());
    }

    public function externalFeeds(): ExternalFeedsApi
    {
        return new ExternalFeedsApi(new Client(), $this->getConfiguration());
    }

    public function files(): FilesApi
    {
        return new FilesApi(new Client(), $this->getConfiguration());
    }

    public function folders(): FoldersApi
    {
        return new FoldersApi(new Client(), $this->getConfiguration());
    }

    public function inboundParsing(): InboundParsingApi
    {
        return new InboundParsingApi(new Client(), $this->getConfiguration());
    }

    public function lists(): ListsApi
    {
        return new ListsApi(new Client(), $this->getConfiguration());
    }

    public function masterAccount(): MasterAccountApi
    {
        return new MasterAccountApi(new Client(), $this->getConfiguration());
    }

    public function notes(): NotesApi
    {
        return new NotesApi(new Client(), $this->getConfiguration());
    }

    public function process(): ProcessApi
    {
        return new ProcessApi(new Client(), $this->getConfiguration());
    }

    public function reseller(): ResellerApi
    {
        return new ResellerApi(new Client(), $this->getConfiguration());
    }

    public function smsCampaigns(): SMSCampaignsApi
    {
        return new SMSCampaignsApi(new Client(), $this->getConfiguration());
    }

    public function senders(): SendersApi
    {
        return new SendersApi(new Client(), $this->getConfiguration());
    }

    public function tasks(): TasksApi
    {
        return new TasksApi(new Client(), $this->getConfiguration());
    }

    public function transactionalEmails(): TransactionalEmailsApi
    {
        return new TransactionalEmailsApi(new Client(), $this->getConfiguration());
    }

    public function transactionalSms(): TransactionalSMSApi
    {
        return new TransactionalSMSApi(new Client(), $this->getConfiguration());
    }

    public function transactionalWhatsApp(): TransactionalWhatsAppApi
    {
        return new TransactionalWhatsAppApi(new Client(), $this->getConfiguration());
    }

    public function user(): UserApi
    {
        return new UserApi(new Client(), $this->getConfiguration());
    }

    public function webhooks(): WebhooksApi
    {
        return new WebhooksApi(new Client(), $this->getConfiguration());
    }

    public function whatsAppCampaigns(): WhatsAppCampaignsApi
    {
        return new WhatsAppCampaignsApi(new Client(), $this->getConfiguration());
    }
}

<?php

namespace Jaiwalker\BrontoApi\Contact;

use Bronto_Api;

/**
 *
 * @Author JaiKora <kora.jayaram@gmail.com>
 * @GitHub -  https://github.com/jaiwalker
 */
class ContactApi
{
     protected  $bronto;
    /**
     * BrontoContactApi constructor.
     */
    public function __construct()
    {
        $token = '1AFA2B68-F4D7-47F3-8B5D-3ECF0FF09484';

        $this->bronto = new Bronto_Api();
        if ( ! is_null($token)) {
            $this->bronto->setToken($token);
            $this->bronto->login();
        }

    }


    public function createContact()
    {
        $contactObject = $this->bronto->getContactObject();

        $contact = $contactObject->createRow();
        $contact->email = 'jaibronto@example.com';
        $contact->status = \Bronto_Api_Contact::STATUS_ONBOARDING;

        $contact->addToList('0bda03ec00000000000000000000001dacc1'); // $list can be the (string) ID or a Bronto_Api_List instance

        dd($contactObject);

        try {
            $contact->save();
        } catch (Exception $e) {
            dd($e);
        }

    }


}
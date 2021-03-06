<?php

namespace Webkul\UVDesk\CoreBundle\Templates\Email\Resources\Agent;

use Webkul\UVDesk\CoreBundle\Templates\Email\UVDeskEmailTemplateInterface;

abstract class TicketCreated implements UVDeskEmailTemplateInterface
{
    private static $name = 'Ticket generated by agent';
    private static $subject = 'A ticket has been generated by agent';
    private static $message = <<<MESSAGE
    <p></p>
    <p></p>
    <p style="text-align: center; ">{%global.companyLogo%}</p>
    <p style="text-align: center; ">
        <br />
    </p>
    <p style="text-align: center; ">
        <b>
            <span style="font-size: 18px;">Ticket generated!!</span>
        </b>
    </p>
    <br />Hello,
    <p></p>
    <p>
        <br />
    </p>
    <p>A ticket&nbsp;{%ticket.id%} has been generated by the&nbsp;{%ticket.agentName%} from the id&nbsp;{%ticket.agentEmail%}. Hit
        on the link provided so that you can have the access to the ticket&nbsp;{%ticket.link%} or you can also reply via mail.</p>
    <p>
        <br />
    </p>
    <p>Here goes the ticket message:</p>
    <p>{%ticket.message%}
        <br />
    </p>
    <p>
        <br />
    </p>
    <p>
        <br />
    </p> Thanks and Regards
    <p></p>
    <p>{%global.companyName%}
        <br />
    </p>
    <p></p>
    <p></p>
MESSAGE;

    public static function getName()
    {
        return self::$name;
    }

    public static function getSubject()
    {
        return self::$subject;
    }

    public static function getMessage()
    {
        return self::$message;
    }
}
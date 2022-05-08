<?php

namespace classes;

class BillingDetails
{
    public static function insertDetails($con, $agreement, $token, $username){
        $query = $con->prepare("INSERT INTO billingDetails (agreementid, nextBillingDate, token, username)
                                VALUES(:agreementid, :nextBillingDate, :token, :username)");
        $agreementDetails = $agreement->getAgreementDetails();

        $query->bindvalue(":agreementid", $agreement->getId());
        $query->bindvalue(":nextBillingDate", $agreementDetails->getNextBillingDate());
        $query->bindvalue(":token", $token);
        $query->bindvalue(":username", $username);

        return $query->execute();
    }
}
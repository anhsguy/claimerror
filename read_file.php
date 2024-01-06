<?php
function RA_file_to_array($filePath,$explan) {
  $file = fopen($filePath, 'r');
  $RApaidexams=array();
  $NotPaid=array();
  if ($file) {
    while (($line = fgets($file)) !== false) {
      // Extract information from the line based on the provided positions
      $TransactionIdentifier = substr($line, 0, 2);
      $RecordType= substr($line, 2, 1);
      if ($RecordType == '1') {
        echo "\n1. HR1 File Header Record – Health Reconciliation\n";
        $TechSpecReleaseIdentifier = substr($line, 3, 3);
        $ReservedForMOH  = substr($line, 6, 1);
        $GroupNumber = substr($line, 7, 4);
        $HealthCareProvider = substr($line, 11, 6);
        $Specialty = substr($line, 17, 2);
        $MohOfficeCode = substr($line, 19, 1);
        $RemittanceAdviceDataSequence= substr($line, 20, 1);
        $PaymentDate = substr($line, 21, 8);
        $PayeeName = substr($line, 29, 30);
        $TotalAmountPayable = substr($line, 59, 9);
        $TotalAmountPayableSign = substr($line, 68, 1);
        $ChequeNumber = substr($line, 69, 8);
        $ReservedForMOH_1 = substr($line, 77, 2);
        // echo "TechSpecReleaseIdentifier: " . $TechSpecReleaseIdentifier . "\n";
        // echo "ReservedForMOH: " . $ReservedForMOH . "\n";
        // echo "GroupNumber: " . $GroupNumber . "\n";
        // echo "HealthCareProvider: " . $HealthCareProvider . "\n";
        // echo "Specialty: " . $Specialty . "\n";
        // echo "MohOfficeCode: " . $MohOfficeCode . "\n";
        // echo "RemittanceAdviceDataSequence: " . $RemittanceAdviceDataSequence . "\n";
        // echo "PaymentDate: " . $PaymentDate . "\n";
        // echo "PayeeName: " . $PayeeName . "\n";
        // echo "TotalAmountPayable: " . $TotalAmountPayable . "\n";
        // echo "TotalAmountPayableSign: " . $TotalAmountPayableSign . "\n";
        // echo "ChequeNumber: " . $ChequeNumber . "\n";
        // echo "ReservedForMOH_1: " . $ReservedForMOH_1 . "\n";        
      }
      if ($RecordType == '2') {
        echo "\n2. HR2 Address Record One – Health Reconciliation\n";
        $BillingAgentName = substr($line, 3, 30);
        $AddressLineOne  = substr($line, 33, 25);
        $ReservedForMOH  = substr($line, 58, 21);
        // echo "BillingAgentName: " . $BillingAgentName . "\n";
        // echo "AddressLineOne: " . $AddressLineOne . "\n";
        // echo "ReservedForMOH: " . $ReservedForMOH . "\n";
      }
      if ($RecordType == '3') {
        echo "\n3. HR3 Address Record Two – Health Reconciliation\n";
        $AddressLine2= substr($line, 3, 25);
        $AddressLine3 = substr($line, 28, 25);
        $ReservedForMOH = substr($line, 53, 26);
        // echo "AddressLine2: " . $AddressLine2 . "\n";
        // echo "AddressLine3: " . $AddressLine3 . "\n";
        // echo "ReservedForMOH: " . $ReservedForMOH . "\n";
      }
      if ($RecordType == '4') {
        echo "\n4. HR4 Claim Header Record – Health Reconciliation\n";
        $ClaimNumber= substr($line, 3, 11);
        $TransactionType = substr($line, 14, 1);
        $HealthCareProvider = substr($line, 15, 6);
        $Specialty= substr($line, 21, 2);
        $AccountingNumber = substr($line, 23, 8);
        $PatientLastName = substr($line, 31, 14);
        $PatientFirstName= substr($line, 45, 5);
        $ProvinceCode = substr($line, 50, 2);
        $HealthRegistrationNumber = substr($line, 52, 12);
        $VersionCode= substr($line, 64, 2);
        $PaymentProgram = substr($line, 66, 3);
        $ServiceLocationIndicator = substr($line, 69, 4);
        $MohGroupIdentifier = substr($line, 73, 4);
        $ReservedForMOH = substr($line, 77, 2);
        // echo "ClaimNumber: " . $ClaimNumber . "\n";
        // echo "TransactionType: " . $TransactionType . "\n";
        // echo "HealthCareProvider: " . $HealthCareProvider . "\n";
        // echo "Specialty: " . $Specialty . "\n";
        // echo "AccountingNumber: " . $AccountingNumber . "\n";
        // echo "PatientLastName: " . $PatientLastName . "\n";
        // echo "PatientFirstName: " . $PatientFirstName . "\n";
        // echo "ProvinceCode: " . $ProvinceCode . "\n";
        // echo "HealthRegistrationNumber: " . $HealthRegistrationNumber . "\n";
        // echo "VersionCode: " . $VersionCode . "\n";
        // echo "PaymentProgram: " . $PaymentProgram . "\n";
        // echo "ServiceLocationIndicator: " . $ServiceLocationIndicator . "\n";
        // echo "MohGroupIdentifier: " . $MohGroupIdentifier . "\n";
        // echo "ReservedForMOH: " . $ReservedForMOH . "\n";
      }
      if ($RecordType == '5') {
        echo "\n5. HR5 Claim Item Record – Health Reconciliation\n";
        $ClaimNumber= substr($line, 3, 11);
        $TransactionType = substr($line, 14, 1);
        $ServiceDate = substr($line, 15, 8);
        $NumberOfServices= substr($line, 23, 2);
        $ServiceCode = substr($line, 25, 5);
        $ReservedForMOH = substr($line, 30, 1);
        $AmountSubmitted= substr($line, 31, 6);
        $AmountPaid = substr($line, 37, 6);
        $AmountPaidSign = substr($line, 43, 1);
        $ExplanatoryCode = substr($line, 44, 2);
        $ReservedForMOH = substr($line, 46, 33);
        // echo "ClaimNumber: " . $ClaimNumber . "\n";
        // echo "TransactionType: " . $TransactionType . "\n";
        // echo "ServiceDate: " . $ServiceDate . "\n";
        // echo "NumberOfServices: " . $NumberOfServices . "\n";
        // echo "ServiceCode: " . $ServiceCode . "\n";
        // echo "ReservedForMOH: " . $ReservedForMOH . "\n";
        // echo "AmountSubmitted: " . $AmountSubmitted . "\n";
        // echo "AmountPaid: " . $AmountPaid . "\n";
        // echo "AmountPaidSign: " . $AmountPaidSign . "\n";
        // echo "ExplanatoryCode: " . $ExplanatoryCode . "\n";
        // echo "ReservedForMOH: " . $ReservedForMOH . "\n"; 
        // $RApaidexams[]=array((int)$AccountingNumber,$ClaimNumber,formatCurrency($AmountSubmitted),formatCurrency($AmountPaid));
        if ($AmountPaid == 0) {
          $description = getDescriptionByErrorCode($ExplanatoryCode, $explan);
          $NotPaid[]=array((int)$AccountingNumber,formatCurrency($AmountPaid),$ExplanatoryCode,$description);
        }else{
          $RApaidexams[]=array((int)$AccountingNumber,formatCurrency($AmountPaid));
        }
      } 
      if ($RecordType == '6') {
        echo "\n6. HR6 Balance Forward Record – Health Reconciliation\n";
        $AmountBroughtForward1 = substr($line, 3, 9);
        $AmountBroughtForward2 = substr($line, 12, 1);
        $AmountBroughtForward3  = substr($line, 13, 9);
        $AmountBroughtForward4 = substr($line, 22, 1);
        $AmountBroughtForward5  = substr($line, 23, 9);
        $AmountBroughtForward6 = substr($line, 32, 1);
        $AmountBroughtForward7 = substr($line, 33, 9);
        $AmountBroughtForward8 = substr($line, 42, 1);
        $ReservedForMOH = substr($line, 43, 36);
        // echo "AmountBroughtForward1: " . $AmountBroughtForward1 . "\n";
        // echo "AmountBroughtForward2: " . $AmountBroughtForward2 . "\n";
        // echo "AmountBroughtForward3: " . $AmountBroughtForward3 . "\n";
        // echo "AmountBroughtForward4: " . $AmountBroughtForward4 . "\n";
        // echo "AmountBroughtForward5: " . $AmountBroughtForward5 . "\n";
        // echo "AmountBroughtForward6: " . $AmountBroughtForward6 . "\n";
        // echo "AmountBroughtForward7: " . $AmountBroughtForward7 . "\n";
        // echo "AmountBroughtForward8: " . $AmountBroughtForward8 . "\n";
        // echo "ReservedForMOH: " . $ReservedForMOH . "\n";          
      } 
      if ($RecordType == '7') {
        echo "\n7. HR7 Accounting Transaction Record \n";
        $TransactionCode= substr($line, 3, 2);
        $ChequeIndicator = substr($line, 5, 1);
        $TransactionDate= substr($line, 6, 8);
        $TransactionAmount= substr($line, 14, 8);
        $TransactionAmountSign = substr($line, 22, 1);
        $TransactionMessage = substr($line, 23, 50);
        $ReservedForMOH= substr($line, 73, 6);
        // echo "TransactionCode: " . $TransactionCode . "\n";
        // echo "ChequeIndicator: " . $ChequeIndicator . "\n";
        // echo "TransactionDate: " . $TransactionDate . "\n";
        // echo "TransactionAmount: " . $TransactionAmount . "\n";
        // echo "TransactionAmountSign: " . $TransactionAmountSign . "\n";
        // echo "TransactionMessage: " . $TransactionMessage . "\n";
        // echo "ReservedForMOH: " . $ReservedForMOH . "\n";          
      } 
      if ($RecordType == '8') {
        echo "\n8. HR8 Message Facility Record \n";
        $MessageText= substr($line, 3, 70);
        $ReservedForMOH= substr($line, 73, 6);
        // echo "MessageText: " . $MessageText . "\n";
        // echo "ReservedForMOH: " . $ReservedForMOH . "\n";          
      }
    // $RApaidexams[]=array((int)$AccountingNumber,formatCurrency($TotalAmountPayable),formatCurrency($AmountSubmitted),formatCurrency($AmountPaid),formatCurrency($AmountBroughtForward5),formatCurrency($TransactionAmount));
    }
  }
  return [$RApaidexams,$NotPaid];
}
function read_file($filePath,$errors,$explan) {
  $file = fopen($filePath, 'r');
  $ERerrors=array();
  $ERexplan=array();
  // $RApaidexams=array();
  
  if ($file) {
      while (($line = fgets($file)) !== false) {
          // Extract information from the line based on the provided positions
          $TransactionIdentifier = substr($line, 0, 2);
          $RecordIdentifier = substr($line, 2, 1);
          if ($RecordIdentifier == '1') {
            echo "\n1. HX1 Group/Provider Header Record\n";
            $TechSpecReleaseIdentifier = substr($line, 3, 3);
            $MohOfficeCode = substr($line, 6, 1);
            $ReservedForMOH = substr($line, 7, 10);//spaces
            $OperatorNumber = substr($line, 17, 6);
            $GroupNumber = substr($line, 23, 4);
            $HealthCareProvider = substr($line, 27, 6);
            $SpecialtyCode= substr($line, 33, 2);
            $StationNumber = substr($line, 35, 2);
            $ClaimProcessDate = substr($line, 38, 8);
            $ReservedForMOH_1 = substr($line, 46, 33);//spaces
            // echo "TechSpecReleaseIdentifier: $TechSpecReleaseIdentifier\n";
            // echo "MohOfficeCode: $MohOfficeCode\n";
            // echo "OperatorNumber: $OperatorNumber\n";
            // echo "GroupNumber: $GroupNumber\n";
            // echo "HealthCareProvider: $HealthCareProvider\n";
            // echo "SpecialtyCode: $SpecialtyCode\n";
            // echo "StationNumber: $StationNumber\n";
            // echo "ClaimProcessDate: $ClaimProcessDate\n";          
          }
          if ($RecordIdentifier == 'H') {
            echo "\n2. HXH Claims Header 1 Record\n";
            $HealthNumber = substr($line, 3, 10);
            $VersionCode = substr($line, 13, 2);
            $PatientBirthdate = substr($line, 15, 8);
            $AccountingNumber = substr($line, 23, 8);
            $PaymentProgram = substr($line, 31, 3);
            $Payee = substr($line, 34, 1);
            $ReferringProviderNumber= substr($line, 35, 6);
            $MasterNumber = substr($line, 41, 4);
            $PatientAdmissionDate = substr($line, 45, 8);
            $ReferringLabLicence = substr($line, 53, 4);
            $ServiceLocationIndicator= substr($line, 57, 4);
            $ReservedForMOH_2 = substr($line, 61, 3);
            $ErrorCode1 = substr($line, 64, 3);
            $ErrorCode2 = substr($line, 67, 3);
            $ErrorCode3 = substr($line, 70, 3);
            $ErrorCode4= substr($line, 73, 3);
            $ErrorCode5 = substr($line, 76, 3);
            // echo "HealthNumber: $HealthNumber\n";
            // echo "VersionCode: $VersionCode\n";
            // echo "PatientBirthdate: $PatientBirthdate\n";
            // echo "AccountingNumber: $AccountingNumber\n";
            // echo "PaymentProgram: $PaymentProgram\n";
            // echo "Payee: $Payee\n";
            // echo "ReferringProviderNumber: $ReferringProviderNumber\n";
            // echo "MasterNumber: $MasterNumber\n";
            // echo "PatientAdmissionDate: $PatientAdmissionDate\n";
            // echo "ReferringLabLicence: $ReferringLabLicence\n";
            // echo "ServiceLocationIndicator: $ServiceLocationIndicator\n";
            // echo "ReservedForMOH_2: $ReservedForMOH_2\n";
            // echo "ErrorCode1: $ErrorCode1\n";
            // echo "ErrorCode2: $ErrorCode2\n";
            // echo "ErrorCode3: $ErrorCode3\n";
            // echo "ErrorCode4: $ErrorCode4\n";
            // echo "ErrorCode5: $ErrorCode5\n";  
            // Example: Check description for error code "A2A"
            $description = getDescriptionByErrorCode($ErrorCode1, $errors);

            // Output the result
            if ($ErrorCode1!='   ') {
              // echo "\t$ErrorCode1: $description\n";
              $ERerrors[]=array((int)$AccountingNumber,$ErrorCode1,$description,$filePath);
            }                  
          }
          if ($RecordIdentifier == 'R') {
            echo "\n3. HXR Claims Header 2 Record (RMB claims only)\n";
            $RegistrationNumber= substr($line, 3, 12);
            $PatientLastName = substr($line, 15, 9);
            $PatientFirstName= substr($line, 24, 5);
            $PatientSex== substr($line, 29, 1);
            $ProvinceCode = substr($line, 30, 2);
            $ReservedForMOH_3 = substr($line, 32, 32);
          }
          if ($RecordIdentifier == 'T') {
            echo "\n4. HXT Claim Item Record\n";
            $ServiceCode = substr($line, 3, 5);
            $ReservedForMOH = substr($line, 8, 2);
            $FeeSubmitted = substr($line, 10, 6);
            $NumberOfServices = substr($line, 16, 2);
            $ServiceDate = substr($line, 18, 8);
            $DiagnosticCode = substr($line, 26, 4);
            $ReservedForMOH = substr($line, 30, 32);
            $ExplanCode = substr($line, 62, 2);
            $ErrorCode1 = substr($line, 64, 3);
            $ErrorCode2 = substr($line, 67, 3);
            $ErrorCode3 = substr($line, 70, 3);
            $ErrorCode4= substr($line, 73, 3);
            $ErrorCode5 = substr($line, 76, 3);
            // echo "ServiceCode: $ServiceCode\n";
            // echo "FeeSubmitted: $FeeSubmitted\n";
            // echo "NumberOfServices: $NumberOfServices\n";
            // echo "ServiceDate: $ServiceDate\n";
            // echo "DiagnosticCode: $DiagnosticCode\n";
            // echo "\tExplanCode: $ExplanCode\n";
            // echo "ErrorCode1: $ErrorCode1\n";
            // echo "ErrorCode2: $ErrorCode2\n";
            // echo "ErrorCode3: $ErrorCode3\n";
            // echo "ErrorCode4: $ErrorCode4\n";
            // echo "ErrorCode5: $ErrorCode5\n";
            // Example: Check description for error code "A2A"
            $description = getDescriptionByErrorCode($ErrorCode1, $errors);

            // Output the result
            if ($ErrorCode1!='   ') {
              // echo "\t$ErrorCode1: $description\n";
              $ERerrors[]=array((int)$AccountingNumber,$ErrorCode1,$description,$filePath);
            }

            $description = getDescriptionByErrorCode($ExplanCode, $explan);

            // Output the result
            if ($ExplanCode!='  ') {
              echo "\t$ExplanCode: $description\n";
              $RAerrors[]=array((int)$AccountingNumber,$ExplanCode,$description);      
            }
            
          }
          if ($RecordIdentifier == '8') {
            echo "\n5. HX8 Explan Code Message Record (optional)\n";
            $ExplanCode = substr($line, 3, 2);
            $ExplanDescription = substr($line, 5, 55);
            $ReservedForMOH = substr($line, 60, 19);
          }
          if ($RecordIdentifier == '9') {
            echo "\n6. HX9 Group/Provider Trailer Record\n";
            $Header1Count= substr($line, 3, 7);
            $Header2Count = substr($line, 10, 7);
            $ItemCount = substr($line, 17, 7);
            $MessageCount = substr($line, 24, 7);
            $ReservedForMOH = substr($line, 31, 48);
            // echo "Header1Count: $Header1Count\n";
            // echo "Header2Count: $Header2Count\n";
            // echo "ItemCount: $ItemCount\n";
            // echo "MessageCount: $MessageCount\n";
            // echo "ReservedForMOH: $ReservedForMOH\n";
          }

      }

      fclose($file);
  } else {
      echo "Error opening the file.";
  }
  return [$ERerrors,$ERexplan];
}
function formatCurrency($amount)
{
    // Convert the string to a numeric value
    $numericAmount = (float) $amount / 100;

    // Format the numeric value as currency
    $formattedAmount = '$' . number_format($numericAmount, 2);

    return $formattedAmount;
}
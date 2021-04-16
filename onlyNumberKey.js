function onlyNumberKey(evt) { //untuk limit text box boleh masuk nombor sahaja denagn limit 12 abjad
    
          // Only ASCII charactar in that range allowed
          var ASCIICode = (evt.which) ? evt.which : evt.keyCode
          if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
          return false;
          return true;
      }
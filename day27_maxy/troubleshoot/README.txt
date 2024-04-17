Troubleshoot curl error:
1. Copy "ca-bundle.crt" file
2. Open "...\php\extras\ssl\" in your PHP folder
3. Paste "ca-bundle.crt" in that folder
4. Open "...\php\php.ini" file
5. Find "curl.cainfo"
6. Uncomment and replace "curl.cainfo" with this "curl.cainfo="..(replace with your php dir)..\php\extras\ssl\ca-bundle.crt"

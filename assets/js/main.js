/**
 * @Author: Schmitt Felix
 * @Date:   17-02-2021
 * @Email:  felix.schmitt@edingmc.com
 * @Filename: main.js
 * @Last modified by:   Schmitt Felix
 * @Last modified time: 17-02-2021
 * @Copyright: Copyright (C) 2018-2021 TheEdingMCGroup and EdingMC
 */



/* GitHub Login */
$('#github-button').on('click', function() {
  // Initialize with your OAuth.io app public key
  OAuth.initialize('gZeK0rjdjMpH70JACRM_kaKLUIc');
  // Use popup for OAuth
  OAuth.popup('github').then(github => {
    console.log(github);
    // Retrieves user data from oauth provider
    console.log(github.me());
  });
})

<table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
  <tbody>
    <tr>
      <td align="center" bgcolor="#ffffff" style="padding: 0px 0px 40px 0px;" class="padding">
        <!-- wrapper table-->
        <table border="0" cellpadding="0" cellspacing="0" width="520" class="wrapper">
          <tbody>
            <tr>
              <td>
                <!-- SECTION TITLE-->
                <table id="categoryTable" border="0" cellpadding="0" cellspacing="0" width="100%" align="center" bgcolor="#a464c5" class="wrapper">
                  <tbody>
                    <tr>
                      <td align="center" class="section-title">
                        <table border="0" cellpadding="0" cellspacing="0" width="480" class="wrapper">
                          <tbody>
                            <tr>
                              <!-- vertical spacer-->
                              <td style="padding: 3px 25px 10px 25px; font-size: 0;"></td>
                            </tr>
                            <tr>
                              <td style="border-top: 4px solid #DBC1E8; font-size: 0;" width="100%"></td>
                            </tr>
                            <tr>
                              <td style="padding: 5px 0px 6px 0px; font-family: 'Raleway', Helvetica, arial, sans-serif; font-weight: normal; font-size: 20px; line-height: 24px; text-transform: uppercase; color: #ffffff;" class="body-text">@{{ category }}</td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
            <tr>
              <td>
                <!-- ARTICLE BODY-->
                <table border="0" cellpadding="0" cellspacing="0" width="100%" align="center" style="border-left: 1px solid #cccccc; border-right: 1px solid #cccccc; border-bottom: 1px solid #cccccc;" class="wrapper">
                  <tbody>
                    <tr v-if="imageSrc">
                      <td class="padding-feature-image" style="padding-top: 20px; padding-bottom: 5px; padding-left: 0; padding-right: 0;" align="center">
                        <table class="wrapper" border="0" cellpadding="0" cellspacing="0" width="480" align="center">
                          <tr>
                            <td>
                              <a href="@{{ imageUrl ? imageUrl : articleUrl }}" style="text-decoration: none;" target="_blank">
                                <img class="fluid-image" src="@{{ imageSrc }}" width="480" height="240" border="0" alt="@{{ imageAlt }}" style="display: block; padding: 0; color: #ffffff; font-family: Helvetica, arial, sans-serif; font-size: 16px;" />
                              </a>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td style="padding: 10px 0px 0px 0px;" align="center" class="padding-no-bottom">
                        <table border="0" cellpadding="0" cellspacing="0" width="480" align="center" class="wrapper">
                          <tbody>
                            <tr>
                              <td style="padding: 0px 0px 20px 0px;">
                                <a id="articleTitle" href="@{{ articleUrl }}" style="text-decoration: none; font-family: 'Raleway', Helvetica, arial, sans-serif; font-weight: 500; font-size: 22px; line-height: 28px; color: #a464c5;" target="_blank" class="body-text">
                                  @{{ title }}&nbsp;
                                </a>
                                <span v-if="free" style="padding: 3px 9px 3px 9px; vertical-align: bottom; font-family: Helvetica, Arial, sans-serif; font-weight: normal; font-size: 13px; line-height: 28px; letter-spacing: .5px; background-color: #E8F1FA; color: #4e98da;">&nbsp;FREE&nbsp;</span>
                                </span>
                                <span v-if="free">&nbsp;</span>
                                <span v-if="video" style="padding: 3px 9px 3px 9px; vertical-align: bottom; font-family: Helvetica, Arial, sans-serif; font-weight: normal; font-size: 13px; line-height: 28px; letter-spacing: .5px; background-color: #FDE9E6; color: #f26046;">&nbsp;VIDEO&nbsp;</span>
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td style="padding: 0px 0px 20px 0px; font-family: 'Roboto', Helvetica, Arial, sans-serif; font-weight: normal; font-size: 14px; text-align: left; line-height: 18px; color: #909090;" class="body-text">@{{ authors }}</td>
                            </tr>
                            <tr>
                              <td style="padding: 0px 0px 25px 0px; font-family: 'Roboto', Helvetica, Arial, sans-serif; font-weight: normal; font-size: 16px; text-align: left; line-height: 20px; color: #666666;" class="body-text">@{{ blurb }}</td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>


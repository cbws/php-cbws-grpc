<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Cbws\IAM\GRPC\V1alpha1;

/**
 */
class IAMServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Cbws\IAM\GRPC\V1alpha1\ListServiceAccountsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListServiceAccounts(\Cbws\IAM\GRPC\V1alpha1\ListServiceAccountsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.iam.v1alpha1.IAMService/ListServiceAccounts',
        $argument,
        ['\Cbws\IAM\GRPC\V1alpha1\ListServiceAccountsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws\IAM\GRPC\V1alpha1\GetServiceAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetServiceAccount(\Cbws\IAM\GRPC\V1alpha1\GetServiceAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.iam.v1alpha1.IAMService/GetServiceAccount',
        $argument,
        ['\Cbws\IAM\GRPC\V1alpha1\ServiceAccount', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws\IAM\GRPC\V1alpha1\CreateServiceAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateServiceAccount(\Cbws\IAM\GRPC\V1alpha1\CreateServiceAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.iam.v1alpha1.IAMService/CreateServiceAccount',
        $argument,
        ['\Cbws\IAM\GRPC\V1alpha1\ServiceAccount', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws\IAM\GRPC\V1alpha1\UpdateServiceAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateServiceAccount(\Cbws\IAM\GRPC\V1alpha1\UpdateServiceAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.iam.v1alpha1.IAMService/UpdateServiceAccount',
        $argument,
        ['\Cbws\IAM\GRPC\V1alpha1\ServiceAccount', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a [ServiceAccount][google.iam.admin.v1.ServiceAccount].
     * @param \Cbws\IAM\GRPC\V1alpha1\DeleteServiceAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteServiceAccount(\Cbws\IAM\GRPC\V1alpha1\DeleteServiceAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.iam.v1alpha1.IAMService/DeleteServiceAccount',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Generates an OAuth 2.0 access token for a service account.
     * @param \Cbws\IAM\GRPC\V1alpha1\GenerateAccessTokenRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GenerateAccessToken(\Cbws\IAM\GRPC\V1alpha1\GenerateAccessTokenRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.iam.v1alpha1.IAMService/GenerateAccessToken',
        $argument,
        ['\Cbws\IAM\GRPC\V1alpha1\GenerateAccessTokenResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists [ServiceAccountKeys][google.iam.admin.v1.ServiceAccountKey].
     * @param \Cbws\IAM\GRPC\V1alpha1\ListServiceAccountKeysRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListServiceAccountKeys(\Cbws\IAM\GRPC\V1alpha1\ListServiceAccountKeysRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.iam.v1alpha1.IAMService/ListServiceAccountKeys',
        $argument,
        ['\Cbws\IAM\GRPC\V1alpha1\ListServiceAccountKeysResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets the [ServiceAccountKey][google.iam.admin.v1.ServiceAccountKey]
     * by key id.
     * @param \Cbws\IAM\GRPC\V1alpha1\GetServiceAccountKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetServiceAccountKey(\Cbws\IAM\GRPC\V1alpha1\GetServiceAccountKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.iam.v1alpha1.IAMService/GetServiceAccountKey',
        $argument,
        ['\Cbws\IAM\GRPC\V1alpha1\ServiceAccountKey', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a [ServiceAccountKey][google.iam.admin.v1.ServiceAccountKey]
     * and returns it.
     * @param \Cbws\IAM\GRPC\V1alpha1\CreateServiceAccountKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateServiceAccountKey(\Cbws\IAM\GRPC\V1alpha1\CreateServiceAccountKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.iam.v1alpha1.IAMService/CreateServiceAccountKey',
        $argument,
        ['\Cbws\IAM\GRPC\V1alpha1\ServiceAccountKey', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a [ServiceAccountKey][google.iam.admin.v1.ServiceAccountKey].
     * @param \Cbws\IAM\GRPC\V1alpha1\DeleteServiceAccountKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteServiceAccountKey(\Cbws\IAM\GRPC\V1alpha1\DeleteServiceAccountKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.iam.v1alpha1.IAMService/DeleteServiceAccountKey',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns the Cloud IAM access control policy for a
     * [ServiceAccount][google.iam.admin.v1.ServiceAccount].
     *
     * Note: Service accounts are both
     * [resources and
     * identities](/iam/docs/service-accounts#service_account_permissions). This
     * method treats the service account as a resource. It returns the Cloud IAM
     * policy that reflects what members have access to the service account.
     *
     * This method does not return what resources the service account has access
     * to. To see if a service account has access to a resource, call the
     * `getIamPolicy` method on the target resource. For example, to view grants
     * for a project, call the
     * [projects.getIamPolicy](/resource-manager/reference/rest/v1/projects/getIamPolicy)
     * method.
     * @param \Cbws\IAM\Policy\GRPC\V1alpha1\GetPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetPolicy(\Cbws\IAM\Policy\GRPC\V1alpha1\GetPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.iam.v1alpha1.IAMService/GetPolicy',
        $argument,
        ['\Cbws\IAM\Policy\GRPC\V1alpha1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * Sets the Cloud IAM access control policy for a
     * [ServiceAccount][google.iam.admin.v1.ServiceAccount].
     *
     * Note: Service accounts are both
     * [resources and
     * identities](/iam/docs/service-accounts#service_account_permissions). This
     * method treats the service account as a resource. Use it to grant members
     * access to the service account, such as when they need to impersonate it.
     *
     * This method does not grant the service account access to other resources,
     * such as projects. To grant a service account access to resources, include
     * the service account in the Cloud IAM policy for the desired resource, then
     * call the appropriate `setIamPolicy` method on the target resource. For
     * example, to grant a service account access to a project, call the
     * [projects.setIamPolicy](/resource-manager/reference/rest/v1/projects/setIamPolicy)
     * method.
     * @param \Cbws\IAM\Policy\GRPC\V1alpha1\SetPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetPolicy(\Cbws\IAM\Policy\GRPC\V1alpha1\SetPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.iam.v1alpha1.IAMService/SetPolicy',
        $argument,
        ['\Cbws\IAM\Policy\GRPC\V1alpha1\Policy', 'decode'],
        $metadata, $options);
    }

}

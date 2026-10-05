<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Cbws\Grpc\Iam\V1alpha1;

/**
 * Manages service accounts and their keys, and issues credentials for them.
 *
 * A service account is an identity for a workload rather than a person. It
 * belongs to a project, and is named by its email address, such as
 * `projects/my-project/serviceAccounts/my-app@my-project.iam-sa.cbws.xyz`.
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
     * Lists the service accounts of a project. Requires
     * `iam.cbws.xyz/ServiceAccount/list` on the project.
     * @param \Cbws\Grpc\Iam\V1alpha1\ListServiceAccountsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Iam\V1alpha1\ListServiceAccountsResponse>
     */
    public function ListServiceAccounts(\Cbws\Grpc\Iam\V1alpha1\ListServiceAccountsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.iam.v1alpha1.IAMService/ListServiceAccounts',
        $argument,
        ['\Cbws\Grpc\Iam\V1alpha1\ListServiceAccountsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a service account. Requires `iam.cbws.xyz/ServiceAccount/get` on
     * the service account.
     * @param \Cbws\Grpc\Iam\V1alpha1\GetServiceAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Iam\V1alpha1\ServiceAccount>
     */
    public function GetServiceAccount(\Cbws\Grpc\Iam\V1alpha1\GetServiceAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.iam.v1alpha1.IAMService/GetServiceAccount',
        $argument,
        ['\Cbws\Grpc\Iam\V1alpha1\ServiceAccount', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a service account in a project and returns it. Requires
     * `iam.cbws.xyz/ServiceAccount/create` on the project.
     *
     * The new account gets a system-managed key straight away, so it can
     * sign and get access tokens without a user-managed key.
     * @param \Cbws\Grpc\Iam\V1alpha1\CreateServiceAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Iam\V1alpha1\ServiceAccount>
     */
    public function CreateServiceAccount(\Cbws\Grpc\Iam\V1alpha1\CreateServiceAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.iam.v1alpha1.IAMService/CreateServiceAccount',
        $argument,
        ['\Cbws\Grpc\Iam\V1alpha1\ServiceAccount', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a service account and all of its keys. Requires
     * `iam.cbws.xyz/ServiceAccount/delete` on the service account.
     *
     * Role bindings that name the account on other resources are not
     * removed. Remove them from those resources' policies.
     * @param \Cbws\Grpc\Iam\V1alpha1\DeleteServiceAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function DeleteServiceAccount(\Cbws\Grpc\Iam\V1alpha1\DeleteServiceAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.iam.v1alpha1.IAMService/DeleteServiceAccount',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Generates an OAuth 2.0 access token for a service account, valid for
     * one hour. Requires `iam.cbws.xyz/ServiceAccount/generateAccessToken` on
     * the service account.
     * @param \Cbws\Grpc\Iam\V1alpha1\GenerateAccessTokenRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Iam\V1alpha1\GenerateAccessTokenResponse>
     */
    public function GenerateAccessToken(\Cbws\Grpc\Iam\V1alpha1\GenerateAccessTokenRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.iam.v1alpha1.IAMService/GenerateAccessToken',
        $argument,
        ['\Cbws\Grpc\Iam\V1alpha1\GenerateAccessTokenResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Signs a JWT with one of the service account's system-managed keys, so
     * that it verifies against the account's published key set. Requires
     * `iam.cbws.xyz/ServiceAccount/signJwt` on the service account.
     *
     * The JWT header is `{"alg":"RS256","kid":"<key_id>","typ":"JWT"}`. The
     * call fails with FAILED_PRECONDITION when the account has no
     * system-managed key that stays valid for at least another hour.
     * @param \Cbws\Grpc\Iam\V1alpha1\SignJwtRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Iam\V1alpha1\SignJwtResponse>
     */
    public function SignJwt(\Cbws\Grpc\Iam\V1alpha1\SignJwtRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.iam.v1alpha1.IAMService/SignJwt',
        $argument,
        ['\Cbws\Grpc\Iam\V1alpha1\SignJwtResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Signs a blob with one of the service account's system-managed keys.
     * Requires `iam.cbws.xyz/ServiceAccount/signBlob` on the service account.
     *
     * The call fails with FAILED_PRECONDITION when the account has no
     * system-managed key that stays valid for at least another hour.
     * @param \Cbws\Grpc\Iam\V1alpha1\SignBlobRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Iam\V1alpha1\SignBlobResponse>
     */
    public function SignBlob(\Cbws\Grpc\Iam\V1alpha1\SignBlobRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.iam.v1alpha1.IAMService/SignBlob',
        $argument,
        ['\Cbws\Grpc\Iam\V1alpha1\SignBlobResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists the keys of a service account, newest first. Requires
     * `iam.cbws.xyz/ServiceAccountKey/list` on the service account.
     *
     * A key is listed once its validity has started. The listed keys carry
     * no key material. Use
     * [GetServiceAccountKey][cbws.iam.v1alpha1.IAMService.GetServiceAccountKey]
     * for a key's public key.
     * @param \Cbws\Grpc\Iam\V1alpha1\ListServiceAccountKeysRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Iam\V1alpha1\ListServiceAccountKeysResponse>
     */
    public function ListServiceAccountKeys(\Cbws\Grpc\Iam\V1alpha1\ListServiceAccountKeysRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.iam.v1alpha1.IAMService/ListServiceAccountKeys',
        $argument,
        ['\Cbws\Grpc\Iam\V1alpha1\ListServiceAccountKeysResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a service account key with its public key. Requires
     * `iam.cbws.xyz/ServiceAccountKey/get` on the key.
     * @param \Cbws\Grpc\Iam\V1alpha1\GetServiceAccountKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Iam\V1alpha1\ServiceAccountKey>
     */
    public function GetServiceAccountKey(\Cbws\Grpc\Iam\V1alpha1\GetServiceAccountKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.iam.v1alpha1.IAMService/GetServiceAccountKey',
        $argument,
        ['\Cbws\Grpc\Iam\V1alpha1\ServiceAccountKey', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a user-managed key for a service account and returns it with
     * its private key. Requires `iam.cbws.xyz/ServiceAccountKey/create` on
     * the service account.
     *
     * The private key is returned only in this response. CBWS does not keep
     * it, so store it safely: it lets anyone who holds it act as the service
     * account.
     * @param \Cbws\Grpc\Iam\V1alpha1\CreateServiceAccountKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Iam\V1alpha1\ServiceAccountKey>
     */
    public function CreateServiceAccountKey(\Cbws\Grpc\Iam\V1alpha1\CreateServiceAccountKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.iam.v1alpha1.IAMService/CreateServiceAccountKey',
        $argument,
        ['\Cbws\Grpc\Iam\V1alpha1\ServiceAccountKey', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a user-managed service account key. Requires
     * `iam.cbws.xyz/ServiceAccountKey/delete` on the key. System-managed keys
     * cannot be deleted.
     * @param \Cbws\Grpc\Iam\V1alpha1\DeleteServiceAccountKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function DeleteServiceAccountKey(\Cbws\Grpc\Iam\V1alpha1\DeleteServiceAccountKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.iam.v1alpha1.IAMService/DeleteServiceAccountKey',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets the IAM policy of a service account. Requires
     * `iam.cbws.xyz/ServiceAccount/getIAMPolicy` on the service account.
     *
     * The policy says who has access to the service account as a resource,
     * such as who may get tokens for it. It does not say what the service
     * account itself has access to. That is in the policies of the resources
     * it is granted on.
     *
     * The `resource` is the service account's resource name,
     * `projects/{project}/serviceAccounts/{email}`.
     * @param \Cbws\Grpc\Iam\Policy\V1alpha1\GetPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Iam\Policy\V1alpha1\Policy>
     */
    public function GetPolicy(\Cbws\Grpc\Iam\Policy\V1alpha1\GetPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.iam.v1alpha1.IAMService/GetPolicy',
        $argument,
        ['\Cbws\Grpc\Iam\Policy\V1alpha1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * Replaces the IAM policy of a service account. Requires
     * `iam.cbws.xyz/ServiceAccount/setIAMPolicy` on the service account.
     *
     * Use it to grant access to the service account as a resource, such as
     * the right to get tokens for it. To grant the service account access to
     * another resource, such as a project, set the policy of that resource.
     *
     * The `resource` is the service account's resource name,
     * `projects/{project}/serviceAccounts/{email}`.
     * @param \Cbws\Grpc\Iam\Policy\V1alpha1\SetPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Iam\Policy\V1alpha1\Policy>
     */
    public function SetPolicy(\Cbws\Grpc\Iam\Policy\V1alpha1\SetPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.iam.v1alpha1.IAMService/SetPolicy',
        $argument,
        ['\Cbws\Grpc\Iam\Policy\V1alpha1\Policy', 'decode'],
        $metadata, $options);
    }

}

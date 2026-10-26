<?php
// GENERATED CODE -- DO NOT EDIT!
// source: cbws/iam/v1alpha1/iam.proto

namespace Cbws\Grpc\Iam\V1alpha1;

use Cbws\Grpc\Transport\ExtGrpcTransport;
use Cbws\Grpc\Transport\Transport;
use Cbws\Grpc\Transport\UnaryCall;

/**
 * Manages service accounts and their keys, and issues credentials for them.
 *
 * A service account is an identity for a workload rather than a person. It
 * belongs to a project, and is named by its email address, such as
 * `projects/my-project/serviceAccounts/my-app@my-project.iam-sa.cbws.xyz`.
 */
class IAMServiceClient
{
    private Transport $transport;

    /**
     * @param Transport|string     $transport a transport, or a hostname to dial over native gRPC
     * @param array<string, mixed> $opts      options for ExtGrpcTransport when $transport is a hostname
     */
    public function __construct(Transport|string $transport, array $opts = [])
    {
        $this->transport = $transport instanceof Transport
            ? $transport
            : new ExtGrpcTransport($transport, $opts);
    }

    public function getTransport(): Transport
    {
        return $this->transport;
    }

    public function close(): void
    {
        $this->transport->close();
    }

    /**
     * Lists the service accounts of a project. Requires
     * `iam.cbws.xyz/ServiceAccount/list` on the project.
     *
     * @return UnaryCall<\Cbws\Grpc\Iam\V1alpha1\ListServiceAccountsResponse>
     */
    public function ListServiceAccounts(\Cbws\Grpc\Iam\V1alpha1\ListServiceAccountsRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.iam.v1alpha1.IAMService/ListServiceAccounts', $argument, \Cbws\Grpc\Iam\V1alpha1\ListServiceAccountsResponse::class, $metadata, $options);
    }

    /**
     * Gets a service account. Requires `iam.cbws.xyz/ServiceAccount/get` on
     * the service account.
     *
     * @return UnaryCall<\Cbws\Grpc\Iam\V1alpha1\ServiceAccount>
     */
    public function GetServiceAccount(\Cbws\Grpc\Iam\V1alpha1\GetServiceAccountRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.iam.v1alpha1.IAMService/GetServiceAccount', $argument, \Cbws\Grpc\Iam\V1alpha1\ServiceAccount::class, $metadata, $options);
    }

    /**
     * Creates a service account in a project and returns it. Requires
     * `iam.cbws.xyz/ServiceAccount/create` on the project.
     *
     * The new account gets a system-managed key straight away, so it can
     * sign and get access tokens without a user-managed key.
     *
     * @return UnaryCall<\Cbws\Grpc\Iam\V1alpha1\ServiceAccount>
     */
    public function CreateServiceAccount(\Cbws\Grpc\Iam\V1alpha1\CreateServiceAccountRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.iam.v1alpha1.IAMService/CreateServiceAccount', $argument, \Cbws\Grpc\Iam\V1alpha1\ServiceAccount::class, $metadata, $options);
    }

    /**
     * Deletes a service account and all of its keys. Requires
     * `iam.cbws.xyz/ServiceAccount/delete` on the service account.
     *
     * Role bindings that name the account on other resources are not
     * removed. Remove them from those resources' policies.
     *
     * @return UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function DeleteServiceAccount(\Cbws\Grpc\Iam\V1alpha1\DeleteServiceAccountRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.iam.v1alpha1.IAMService/DeleteServiceAccount', $argument, \Google\Protobuf\GPBEmpty::class, $metadata, $options);
    }

    /**
     * Generates an OAuth 2.0 access token for a service account, valid for
     * one hour. Requires `iam.cbws.xyz/ServiceAccount/generateAccessToken` on
     * the service account.
     *
     * @return UnaryCall<\Cbws\Grpc\Iam\V1alpha1\GenerateAccessTokenResponse>
     */
    public function GenerateAccessToken(\Cbws\Grpc\Iam\V1alpha1\GenerateAccessTokenRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.iam.v1alpha1.IAMService/GenerateAccessToken', $argument, \Cbws\Grpc\Iam\V1alpha1\GenerateAccessTokenResponse::class, $metadata, $options);
    }

    /**
     * Signs a JWT with one of the service account's system-managed keys, so
     * that it verifies against the account's published key set. Requires
     * `iam.cbws.xyz/ServiceAccount/signJwt` on the service account.
     *
     * The JWT header is `{"alg":"RS256","kid":"<key_id>","typ":"JWT"}`. The
     * call fails with FAILED_PRECONDITION when the account has no
     * system-managed key that stays valid for at least another hour.
     *
     * @return UnaryCall<\Cbws\Grpc\Iam\V1alpha1\SignJwtResponse>
     */
    public function SignJwt(\Cbws\Grpc\Iam\V1alpha1\SignJwtRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.iam.v1alpha1.IAMService/SignJwt', $argument, \Cbws\Grpc\Iam\V1alpha1\SignJwtResponse::class, $metadata, $options);
    }

    /**
     * Signs a blob with one of the service account's system-managed keys.
     * Requires `iam.cbws.xyz/ServiceAccount/signBlob` on the service account.
     *
     * The call fails with FAILED_PRECONDITION when the account has no
     * system-managed key that stays valid for at least another hour.
     *
     * @return UnaryCall<\Cbws\Grpc\Iam\V1alpha1\SignBlobResponse>
     */
    public function SignBlob(\Cbws\Grpc\Iam\V1alpha1\SignBlobRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.iam.v1alpha1.IAMService/SignBlob', $argument, \Cbws\Grpc\Iam\V1alpha1\SignBlobResponse::class, $metadata, $options);
    }

    /**
     * Lists the keys of a service account, newest first. Requires
     * `iam.cbws.xyz/ServiceAccountKey/list` on the service account.
     *
     * A key is listed once its validity has started. The listed keys carry
     * no key material. Use
     * [GetServiceAccountKey][cbws.iam.v1alpha1.IAMService.GetServiceAccountKey]
     * for a key's public key.
     *
     * @return UnaryCall<\Cbws\Grpc\Iam\V1alpha1\ListServiceAccountKeysResponse>
     */
    public function ListServiceAccountKeys(\Cbws\Grpc\Iam\V1alpha1\ListServiceAccountKeysRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.iam.v1alpha1.IAMService/ListServiceAccountKeys', $argument, \Cbws\Grpc\Iam\V1alpha1\ListServiceAccountKeysResponse::class, $metadata, $options);
    }

    /**
     * Gets a service account key with its public key. Requires
     * `iam.cbws.xyz/ServiceAccountKey/get` on the key.
     *
     * @return UnaryCall<\Cbws\Grpc\Iam\V1alpha1\ServiceAccountKey>
     */
    public function GetServiceAccountKey(\Cbws\Grpc\Iam\V1alpha1\GetServiceAccountKeyRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.iam.v1alpha1.IAMService/GetServiceAccountKey', $argument, \Cbws\Grpc\Iam\V1alpha1\ServiceAccountKey::class, $metadata, $options);
    }

    /**
     * Creates a user-managed key for a service account and returns it with
     * its private key. Requires `iam.cbws.xyz/ServiceAccountKey/create` on
     * the service account.
     *
     * The private key is returned only in this response. CBWS does not keep
     * it, so store it safely: it lets anyone who holds it act as the service
     * account.
     *
     * @return UnaryCall<\Cbws\Grpc\Iam\V1alpha1\ServiceAccountKey>
     */
    public function CreateServiceAccountKey(\Cbws\Grpc\Iam\V1alpha1\CreateServiceAccountKeyRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.iam.v1alpha1.IAMService/CreateServiceAccountKey', $argument, \Cbws\Grpc\Iam\V1alpha1\ServiceAccountKey::class, $metadata, $options);
    }

    /**
     * Deletes a user-managed service account key. Requires
     * `iam.cbws.xyz/ServiceAccountKey/delete` on the key. System-managed keys
     * cannot be deleted.
     *
     * @return UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function DeleteServiceAccountKey(\Cbws\Grpc\Iam\V1alpha1\DeleteServiceAccountKeyRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.iam.v1alpha1.IAMService/DeleteServiceAccountKey', $argument, \Google\Protobuf\GPBEmpty::class, $metadata, $options);
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
     *
     * @return UnaryCall<\Cbws\Grpc\Iam\Policy\V1alpha1\Policy>
     */
    public function GetPolicy(\Cbws\Grpc\Iam\Policy\V1alpha1\GetPolicyRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.iam.v1alpha1.IAMService/GetPolicy', $argument, \Cbws\Grpc\Iam\Policy\V1alpha1\Policy::class, $metadata, $options);
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
     *
     * @return UnaryCall<\Cbws\Grpc\Iam\Policy\V1alpha1\Policy>
     */
    public function SetPolicy(\Cbws\Grpc\Iam\Policy\V1alpha1\SetPolicyRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.iam.v1alpha1.IAMService/SetPolicy', $argument, \Cbws\Grpc\Iam\Policy\V1alpha1\Policy::class, $metadata, $options);
    }
}

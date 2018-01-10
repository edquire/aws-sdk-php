<?php
// This file was auto-generated from sdk-root/src/data/kms/2014-11-01/examples-1.json
return [ 'version' => '1.0', 'examples' => [ 'CancelKeyDeletion' => [ [ 'input' => [ 'KeyId' => '1234abcd-12ab-34cd-56ef-1234567890ab', ], 'output' => [ 'KeyId' => 'arn:aws:kms:us-east-2:111122223333:key/1234abcd-12ab-34cd-56ef-1234567890ab', ], 'comments' => [ 'input' => [ 'KeyId' => 'The identifier of the CMK whose deletion you are canceling. You can use the key ID or the Amazon Resource Name (ARN) of the CMK.', ], 'output' => [ 'KeyId' => 'The ARN of the CMK whose deletion you canceled.', ], ], 'description' => 'The following example cancels deletion of the specified CMK.', 'id' => 'to-cancel-deletion-of-a-cmk-1477428535102', 'title' => 'To cancel deletion of a customer master key (CMK)', ], ], 'CreateAlias' => [ [ 'input' => [ 'AliasName' => 'alias/ExampleAlias', 'TargetKeyId' => '1234abcd-12ab-34cd-56ef-1234567890ab', ], 'comments' => [ 'input' => [ 'AliasName' => 'The alias to create. Aliases must begin with \'alias/\'. Do not use aliases that begin with \'alias/aws\' because they are reserved for use by AWS.', 'TargetKeyId' => 'The identifier of the CMK whose alias you are creating. You can use the key ID or the Amazon Resource Name (ARN) of the CMK.', ], ], 'description' => 'The following example creates an alias for the specified customer master key (CMK).', 'id' => 'to-create-an-alias-1477505685119', 'title' => 'To create an alias', ], ], 'CreateGrant' => [ [ 'input' => [ 'GranteePrincipal' => 'arn:aws:iam::111122223333:role/ExampleRole', 'KeyId' => 'arn:aws:kms:us-east-2:444455556666:key/1234abcd-12ab-34cd-56ef-1234567890ab', 'Operations' => [ 'Encrypt', 'Decrypt', ], ], 'output' => [ 'GrantId' => '0c237476b39f8bc44e45212e08498fbe3151305030726c0590dd8d3e9f3d6a60', 'GrantToken' => 'AQpAM2RhZTk1MGMyNTk2ZmZmMzEyYWVhOWViN2I1MWM4Mzc0MWFiYjc0ZDE1ODkyNGFlNTIzODZhMzgyZjBlNGY3NiKIAgEBAgB4Pa6VDCWW__MSrqnre1HIN0Grt00ViSSuUjhqOC8OT3YAAADfMIHcBgkqhkiG9w0BBwaggc4wgcsCAQAwgcUGCSqGSIb3DQEHATAeBglghkgBZQMEAS4wEQQMmqLyBTAegIn9XlK5AgEQgIGXZQjkBcl1dykDdqZBUQ6L1OfUivQy7JVYO2-ZJP7m6f1g8GzV47HX5phdtONAP7K_HQIflcgpkoCqd_fUnE114mSmiagWkbQ5sqAVV3ov-VeqgrvMe5ZFEWLMSluvBAqdjHEdMIkHMlhlj4ENZbzBfo9Wxk8b8SnwP4kc4gGivedzFXo-dwN8fxjjq_ZZ9JFOj2ijIbj5FyogDCN0drOfi8RORSEuCEmPvjFRMFAwcmwFkN2NPp89amA', ], 'comments' => [ 'input' => [ 'GranteePrincipal' => 'The identity that is given permission to perform the operations specified in the grant.', 'KeyId' => 'The identifier of the CMK to which the grant applies. You can use the key ID or the Amazon Resource Name (ARN) of the CMK.', 'Operations' => 'A list of operations that the grant allows.', ], 'output' => [ 'GrantId' => 'The unique identifier of the grant.', 'GrantToken' => 'The grant token.', ], ], 'description' => 'The following example creates a grant that allows the specified IAM role to encrypt data with the specified customer master key (CMK).', 'id' => 'to-create-a-grant-1477972226782', 'title' => 'To create a grant', ], ], 'CreateKey' => [ [ 'input' => [ 'Tags' => [ [ 'TagKey' => 'CreatedBy', 'TagValue' => 'ExampleUser', ], ], ], 'output' => [ 'KeyMetadata' => [ 'AWSAccountId' => '111122223333', 'Arn' => 'arn:aws:kms:us-east-2:111122223333:key/1234abcd-12ab-34cd-56ef-1234567890ab', 'CreationDate' => '2017-07-05T14:04:55-07:00', 'Description' => '', 'Enabled' => true, 'KeyId' => '1234abcd-12ab-34cd-56ef-1234567890ab', 'KeyManager' => 'CUSTOMER', 'KeyState' => 'Enabled', 'KeyUsage' => 'ENCRYPT_DECRYPT', 'Origin' => 'AWS_KMS', ], ], 'comments' => [ 'input' => [ 'Tags' => 'One or more tags. Each tag consists of a tag key and a tag value.', ], 'output' => [ 'KeyMetadata' => 'An object that contains information about the CMK created by this operation.', ], ], 'description' => 'The following example creates a CMK.', 'id' => 'to-create-a-cmk-1478028992966', 'title' => 'To create a customer master key (CMK)', ], ], 'Decrypt' => [ [ 'input' => [ 'CiphertextBlob' => '<binary data>', ], 'output' => [ 'KeyId' => 'arn:aws:kms:us-west-2:111122223333:key/1234abcd-12ab-34cd-56ef-1234567890ab', 'Plaintext' => '<binary data>', ], 'comments' => [ 'input' => [ 'CiphertextBlob' => 'The encrypted data (ciphertext).', ], 'output' => [ 'KeyId' => 'The Amazon Resource Name (ARN) of the CMK that was used to decrypt the data.', 'Plaintext' => 'The decrypted (plaintext) data.', ], ], 'description' => 'The following example decrypts data that was encrypted with a customer master key (CMK) in AWS KMS.', 'id' => 'to-decrypt-data-1478281622886', 'title' => 'To decrypt data', ], ], 'DeleteAlias' => [ [ 'input' => [ 'AliasName' => 'alias/ExampleAlias', ], 'comments' => [ 'input' => [ 'AliasName' => 'The alias to delete.', ], ], 'description' => 'The following example deletes the specified alias.', 'id' => 'to-delete-an-alias-1478285209338', 'title' => 'To delete an alias', ], ], 'DeleteImportedKeyMaterial' => [ [ 'input' => [ 'KeyId' => '1234abcd-12ab-34cd-56ef-1234567890ab', ], 'comments' => [ 'input' => [ 'KeyId' => 'The identifier of the CMK whose imported key material you are deleting. You can use the key ID or the Amazon Resource Name (ARN) of the CMK.', ], ], 'description' => 'The following example deletes the imported key material from the specified customer master key (CMK).', 'id' => 'to-delete-imported-key-material-1478561674507', 'title' => 'To delete imported key material', ], ], 'DescribeKey' => [ [ 'input' => [ 'KeyId' => '1234abcd-12ab-34cd-56ef-1234567890ab', ], 'output' => [ 'KeyMetadata' => [ 'AWSAccountId' => '111122223333', 'Arn' => 'arn:aws:kms:us-east-2:111122223333:key/1234abcd-12ab-34cd-56ef-1234567890ab', 'CreationDate' => '2017-07-05T14:04:55-07:00', 'Description' => '', 'Enabled' => true, 'KeyId' => '1234abcd-12ab-34cd-56ef-1234567890ab', 'KeyManager' => 'CUSTOMER', 'KeyState' => 'Enabled', 'KeyUsage' => 'ENCRYPT_DECRYPT', 'Origin' => 'AWS_KMS', ], ], 'comments' => [ 'input' => [ 'KeyId' => 'The identifier of the CMK that you want information about. You can use the key ID or the Amazon Resource Name (ARN) of the CMK.', ], 'output' => [ 'KeyMetadata' => 'An object that contains information about the specified CMK.', ], ], 'description' => 'The following example returns information (metadata) about the specified CMK.', 'id' => 'to-obtain-information-about-a-cmk-1478565820907', 'title' => 'To obtain information about a customer master key (CMK)', ], ], 'DisableKey' => [ [ 'input' => [ 'KeyId' => '1234abcd-12ab-34cd-56ef-1234567890ab', ], 'comments' => [ 'input' => [ 'KeyId' => 'The identifier of the CMK to disable. You can use the key ID or the Amazon Resource Name (ARN) of the CMK.', ], ], 'description' => 'The following example disables the specified CMK.', 'id' => 'to-disable-a-cmk-1478566583659', 'title' => 'To disable a customer master key (CMK)', ], ], 'DisableKeyRotation' => [ [ 'input' => [ 'KeyId' => '1234abcd-12ab-34cd-56ef-1234567890ab', ], 'comments' => [ 'input' => [ 'KeyId' => 'The identifier of the CMK whose key material will no longer be rotated. You can use the key ID or the Amazon Resource Name (ARN) of the CMK.', ], ], 'description' => 'The following example disables automatic annual rotation of the key material for the specified CMK.', 'id' => 'to-disable-automatic-rotation-of-key-material-1478624396092', 'title' => 'To disable automatic rotation of key material', ], ], 'EnableKey' => [ [ 'input' => [ 'KeyId' => '1234abcd-12ab-34cd-56ef-1234567890ab', ], 'comments' => [ 'input' => [ 'KeyId' => 'The identifier of the CMK to enable. You can use the key ID or the Amazon Resource Name (ARN) of the CMK.', ], ], 'description' => 'The following example enables the specified CMK.', 'id' => 'to-enable-a-cmk-1478627501129', 'title' => 'To enable a customer master key (CMK)', ], ], 'EnableKeyRotation' => [ [ 'input' => [ 'KeyId' => '1234abcd-12ab-34cd-56ef-1234567890ab', ], 'comments' => [ 'input' => [ 'KeyId' => 'The identifier of the CMK whose key material will be rotated annually. You can use the key ID or the Amazon Resource Name (ARN) of the CMK.', ], ], 'description' => 'The following example enables automatic annual rotation of the key material for the specified CMK.', 'id' => 'to-enable-automatic-rotation-of-key-material-1478629109677', 'title' => 'To enable automatic rotation of key material', ], ], 'Encrypt' => [ [ 'input' => [ 'KeyId' => '1234abcd-12ab-34cd-56ef-1234567890ab', 'Plaintext' => '<binary data>', ], 'output' => [ 'CiphertextBlob' => '<binary data>', 'KeyId' => 'arn:aws:kms:us-west-2:111122223333:key/1234abcd-12ab-34cd-56ef-1234567890ab', ], 'comments' => [ 'input' => [ 'KeyId' => 'The identifier of the CMK to use for encryption. You can use the key ID or Amazon Resource Name (ARN) of the CMK, or the name or ARN of an alias that refers to the CMK.', 'Plaintext' => 'The data to encrypt.', ], 'output' => [ 'CiphertextBlob' => 'The encrypted data (ciphertext).', 'KeyId' => 'The ARN of the CMK that was used to encrypt the data.', ], ], 'description' => 'The following example encrypts data with the specified customer master key (CMK).', 'id' => 'to-encrypt-data-1478906026012', 'title' => 'To encrypt data', ], ], 'GenerateDataKey' => [ [ 'input' => [ 'KeyId' => 'alias/ExampleAlias', 'KeySpec' => 'AES_256', ], 'output' => [ 'CiphertextBlob' => '<binary data>', 'KeyId' => 'arn:aws:kms:us-east-2:111122223333:key/1234abcd-12ab-34cd-56ef-1234567890ab', 'Plaintext' => '<binary data>', ], 'comments' => [ 'input' => [ 'KeyId' => 'The identifier of the CMK to use to encrypt the data key. You can use the key ID or Amazon Resource Name (ARN) of the CMK, or the name or ARN of an alias that refers to the CMK.', 'KeySpec' => 'Specifies the type of data key to return.', ], 'output' => [ 'CiphertextBlob' => 'The encrypted data key.', 'KeyId' => 'The ARN of the CMK that was used to encrypt the data key.', 'Plaintext' => 'The unencrypted (plaintext) data key.', ], ], 'description' => 'The following example generates a 256-bit symmetric data encryption key (data key) in two formats. One is the unencrypted (plainext) data key, and the other is the data key encrypted with the specified customer master key (CMK).', 'id' => 'to-generate-a-data-key-1478912956062', 'title' => 'To generate a data key', ], ], 'GenerateDataKeyWithoutPlaintext' => [ [ 'input' => [ 'KeyId' => 'alias/ExampleAlias', 'KeySpec' => 'AES_256', ], 'output' => [ 'CiphertextBlob' => '<binary data>', 'KeyId' => 'arn:aws:kms:us-east-2:111122223333:key/1234abcd-12ab-34cd-56ef-1234567890ab', ], 'comments' => [ 'input' => [ 'KeyId' => 'The identifier of the CMK to use to encrypt the data key. You can use the key ID or Amazon Resource Name (ARN) of the CMK, or the name or ARN of an alias that refers to the CMK.', 'KeySpec' => 'Specifies the type of data key to return.', ], 'output' => [ 'CiphertextBlob' => 'The encrypted data key.', 'KeyId' => 'The ARN of the CMK that was used to encrypt the data key.', ], ], 'description' => 'The following example generates an encrypted copy of a 256-bit symmetric data encryption key (data key). The data key is encrypted with the specified customer master key (CMK).', 'id' => 'to-generate-an-encrypted-data-key-1478914121134', 'title' => 'To generate an encrypted data key', ], ], 'GenerateRandom' => [ [ 'input' => [ 'NumberOfBytes' => 32, ], 'output' => [ 'Plaintext' => '<binary data>', ], 'comments' => [ 'input' => [ 'NumberOfBytes' => 'The length of the random data, specified in number of bytes.', ], 'output' => [ 'Plaintext' => 'The random data.', ], ], 'description' => 'The following example uses AWS KMS to generate 32 bytes of random data.', 'id' => 'to-generate-random-data-1479163645600', 'title' => 'To generate random data', ], ], 'GetKeyPolicy' => [ [ 'input' => [ 'KeyId' => '1234abcd-12ab-34cd-56ef-1234567890ab', 'PolicyName' => 'default', ], 'output' => [ 'Policy' => '{ "Version" : "2012-10-17", "Id" : "key-default-1", "Statement" : [ { "Sid" : "Enable IAM User Permissions", "Effect" : "Allow", "Principal" : { "AWS" : "arn:aws:iam::111122223333:root" }, "Action" : "kms:*", "Resource" : "*" } ]}', ], 'comments' => [ 'input' => [ 'KeyId' => 'The identifier of the CMK whose key policy you want to retrieve. You can use the key ID or the Amazon Resource Name (ARN) of the CMK.', 'PolicyName' => 'The name of the key policy to retrieve.', ], 'output' => [ 'Policy' => 'The key policy document.', ], ], 'description' => 'The following example retrieves the key policy for the specified customer master key (CMK).', 'id' => 'to-retrieve-a-key-policy-1479170128325', 'title' => 'To retrieve a key policy', ], ], 'GetKeyRotationStatus' => [ [ 'input' => [ 'KeyId' => '1234abcd-12ab-34cd-56ef-1234567890ab', ], 'output' => [ 'KeyRotationEnabled' => true, ], 'comments' => [ 'input' => [ 'KeyId' => 'The identifier of the CMK whose key material rotation status you want to retrieve. You can use the key ID or the Amazon Resource Name (ARN) of the CMK.', ], 'output' => [ 'KeyRotationEnabled' => 'A boolean that indicates the key material rotation status. Returns true when automatic annual rotation of the key material is enabled, or false when it is not.', ], ], 'description' => 'The following example retrieves the status of automatic annual rotation of the key material for the specified CMK.', 'id' => 'to-retrieve-the-rotation-status-for-a-cmk-1479172287408', 'title' => 'To retrieve the rotation status for a customer master key (CMK)', ], ], 'GetParametersForImport' => [ [ 'input' => [ 'KeyId' => '1234abcd-12ab-34cd-56ef-1234567890ab', 'WrappingAlgorithm' => 'RSAES_OAEP_SHA_1', 'WrappingKeySpec' => 'RSA_2048', ], 'output' => [ 'ImportToken' => '<binary data>', 'KeyId' => 'arn:aws:kms:us-east-2:111122223333:key/1234abcd-12ab-34cd-56ef-1234567890ab', 'ParametersValidTo' => '2016-12-01T14:52:17-08:00', 'PublicKey' => '<binary data>', ], 'comments' => [ 'input' => [ 'KeyId' => 'The identifier of the CMK for which to retrieve the public key and import token. You can use the key ID or the Amazon Resource Name (ARN) of the CMK.', 'WrappingAlgorithm' => 'The algorithm that you will use to encrypt the key material before importing it.', 'WrappingKeySpec' => 'The type of wrapping key (public key) to return in the response.', ], 'output' => [ 'ImportToken' => 'The import token to send with a subsequent ImportKeyMaterial request.', 'KeyId' => 'The ARN of the CMK for which you are retrieving the public key and import token. This is the same CMK specified in the request.', 'ParametersValidTo' => 'The time at which the import token and public key are no longer valid.', 'PublicKey' => 'The public key to use to encrypt the key material before importing it.', ], ], 'description' => 'The following example retrieves the public key and import token for the specified CMK.', 'id' => 'to-retrieve-the-public-key-and-import-token-for-a-cmk-1480626483211', 'title' => 'To retrieve the public key and import token for a customer master key (CMK)', ], ], 'ImportKeyMaterial' => [ [ 'input' => [ 'EncryptedKeyMaterial' => '<binary data>', 'ExpirationModel' => 'KEY_MATERIAL_DOES_NOT_EXPIRE', 'ImportToken' => '<binary data>', 'KeyId' => '1234abcd-12ab-34cd-56ef-1234567890ab', ], 'comments' => [ 'input' => [ 'EncryptedKeyMaterial' => 'The encrypted key material to import.', 'ExpirationModel' => 'A value that specifies whether the key material expires.', 'ImportToken' => 'The import token that you received in the response to a previous GetParametersForImport request.', 'KeyId' => 'The identifier of the CMK to import the key material into. You can use the key ID or the Amazon Resource Name (ARN) of the CMK.', ], ], 'description' => 'The following example imports key material into the specified CMK.', 'id' => 'to-import-key-material-into-a-cmk-1480630551969', 'title' => 'To import key material into a customer master key (CMK)', ], ], 'ListAliases' => [ [ 'output' => [ 'Aliases' => [ [ 'AliasArn' => 'arn:aws:kms:us-east-2:111122223333:alias/aws/acm', 'AliasName' => 'alias/aws/acm', 'TargetKeyId' => 'da03f6f7-d279-427a-9cae-de48d07e5b66', ], [ 'AliasArn' => 'arn:aws:kms:us-east-2:111122223333:alias/aws/ebs', 'AliasName' => 'alias/aws/ebs', 'TargetKeyId' => '25a217e7-7170-4b8c-8bf6-045ea5f70e5b', ], [ 'AliasArn' => 'arn:aws:kms:us-east-2:111122223333:alias/aws/rds', 'AliasName' => 'alias/aws/rds', 'TargetKeyId' => '7ec3104e-c3f2-4b5c-bf42-bfc4772c6685', ], [ 'AliasArn' => 'arn:aws:kms:us-east-2:111122223333:alias/aws/redshift', 'AliasName' => 'alias/aws/redshift', 'TargetKeyId' => '08f7a25a-69e2-4fb5-8f10-393db27326fa', ], [ 'AliasArn' => 'arn:aws:kms:us-east-2:111122223333:alias/aws/s3', 'AliasName' => 'alias/aws/s3', 'TargetKeyId' => 'd2b0f1a3-580d-4f79-b836-bc983be8cfa5', ], [ 'AliasArn' => 'arn:aws:kms:us-east-2:111122223333:alias/example1', 'AliasName' => 'alias/example1', 'TargetKeyId' => '4da1e216-62d0-46c5-a7c0-5f3a3d2f8046', ], [ 'AliasArn' => 'arn:aws:kms:us-east-2:111122223333:alias/example2', 'AliasName' => 'alias/example2', 'TargetKeyId' => 'f32fef59-2cc2-445b-8573-2d73328acbee', ], [ 'AliasArn' => 'arn:aws:kms:us-east-2:111122223333:alias/example3', 'AliasName' => 'alias/example3', 'TargetKeyId' => '1374ef38-d34e-4d5f-b2c9-4e0daee38855', ], ], 'Truncated' => false, ], 'comments' => [ 'output' => [ 'Aliases' => 'A list of aliases, including the key ID of the customer master key (CMK) that each alias refers to.', 'Truncated' => 'A boolean that indicates whether there are more items in the list. Returns true when there are more items, or false when there are not.', ], ], 'description' => 'The following example lists aliases.', 'id' => 'to-list-aliases-1480729693349', 'title' => 'To list aliases', ], ], 'ListGrants' => [ [ 'input' => [ 'KeyId' => '1234abcd-12ab-34cd-56ef-1234567890ab', ], 'output' => [ 'Grants' => [ [ 'CreationDate' => '2016-10-25T14:37:41-07:00', 'GrantId' => '91ad875e49b04a9d1f3bdeb84d821f9db6ea95e1098813f6d47f0c65fbe2a172', 'GranteePrincipal' => 'acm.us-east-2.amazonaws.com', 'IssuingAccount' => 'arn:aws:iam::111122223333:root', 'KeyId' => 'arn:aws:kms:us-east-2:111122223333:key/1234abcd-12ab-34cd-56ef-1234567890ab', 'Operations' => [ 'Encrypt', 'ReEncryptFrom', 'ReEncryptTo', ], 'RetiringPrincipal' => 'acm.us-east-2.amazonaws.com', ], [ 'CreationDate' => '2016-10-25T14:37:41-07:00', 'GrantId' => 'a5d67d3e207a8fc1f4928749ee3e52eb0440493a8b9cf05bbfad91655b056200', 'GranteePrincipal' => 'acm.us-east-2.amazonaws.com', 'IssuingAccount' => 'arn:aws:iam::111122223333:root', 'KeyId' => 'arn:aws:kms:us-east-2:111122223333:key/1234abcd-12ab-34cd-56ef-1234567890ab', 'Operations' => [ 'ReEncryptFrom', 'ReEncryptTo', ], 'RetiringPrincipal' => 'acm.us-east-2.amazonaws.com', ], [ 'CreationDate' => '2016-10-25T14:37:41-07:00', 'GrantId' => 'c541aaf05d90cb78846a73b346fc43e65be28b7163129488c738e0c9e0628f4f', 'GranteePrincipal' => 'acm.us-east-2.amazonaws.com', 'IssuingAccount' => 'arn:aws:iam::111122223333:root', 'KeyId' => 'arn:aws:kms:us-east-2:111122223333:key/1234abcd-12ab-34cd-56ef-1234567890ab', 'Operations' => [ 'Encrypt', 'ReEncryptFrom', 'ReEncryptTo', ], 'RetiringPrincipal' => 'acm.us-east-2.amazonaws.com', ], [ 'CreationDate' => '2016-10-25T14:37:41-07:00', 'GrantId' => 'dd2052c67b4c76ee45caf1dc6a1e2d24e8dc744a51b36ae2f067dc540ce0105c', 'GranteePrincipal' => 'acm.us-east-2.amazonaws.com', 'IssuingAccount' => 'arn:aws:iam::111122223333:root', 'KeyId' => 'arn:aws:kms:us-east-2:111122223333:key/1234abcd-12ab-34cd-56ef-1234567890ab', 'Operations' => [ 'Encrypt', 'ReEncryptFrom', 'ReEncryptTo', ], 'RetiringPrincipal' => 'acm.us-east-2.amazonaws.com', ], ], 'Truncated' => true, ], 'comments' => [ 'input' => [ 'KeyId' => 'The identifier of the CMK whose grants you want to list. You can use the key ID or the Amazon Resource Name (ARN) of the CMK.', ], 'output' => [ 'Grants' => 'A list of grants.', 'Truncated' => 'A boolean that indicates whether there are more items in the list. Returns true when there are more items, or false when there are not.', ], ], 'description' => 'The following example lists grants for the specified CMK.', 'id' => 'to-list-grants-for-a-cmk-1481067365389', 'title' => 'To list grants for a customer master key (CMK)', ], ], 'ListKeyPolicies' => [ [ 'input' => [ 'KeyId' => '1234abcd-12ab-34cd-56ef-1234567890ab', ], 'output' => [ 'PolicyNames' => [ 'default', ], 'Truncated' => false, ], 'comments' => [ 'input' => [ 'KeyId' => 'The identifier of the CMK whose key policies you want to list. You can use the key ID or the Amazon Resource Name (ARN) of the CMK.', ], 'output' => [ 'PolicyNames' => 'A list of key policy names.', 'Truncated' => 'A boolean that indicates whether there are more items in the list. Returns true when there are more items, or false when there are not.', ], ], 'description' => 'The following example lists key policies for the specified CMK.', 'id' => 'to-list-key-policies-for-a-cmk-1481069780998', 'title' => 'To list key policies for a customer master key (CMK)', ], ], 'ListKeys' => [ [ 'output' => [ 'Keys' => [ [ 'KeyArn' => 'arn:aws:kms:us-east-2:111122223333:key/0d990263-018e-4e65-a703-eff731de951e', 'KeyId' => '0d990263-018e-4e65-a703-eff731de951e', ], [ 'KeyArn' => 'arn:aws:kms:us-east-2:111122223333:key/144be297-0ae1-44ac-9c8f-93cd8c82f841', 'KeyId' => '144be297-0ae1-44ac-9c8f-93cd8c82f841', ], [ 'KeyArn' => 'arn:aws:kms:us-east-2:111122223333:key/21184251-b765-428e-b852-2c7353e72571', 'KeyId' => '21184251-b765-428e-b852-2c7353e72571', ], [ 'KeyArn' => 'arn:aws:kms:us-east-2:111122223333:key/214fe92f-5b03-4ae1-b350-db2a45dbe10c', 'KeyId' => '214fe92f-5b03-4ae1-b350-db2a45dbe10c', ], [ 'KeyArn' => 'arn:aws:kms:us-east-2:111122223333:key/339963f2-e523-49d3-af24-a0fe752aa458', 'KeyId' => '339963f2-e523-49d3-af24-a0fe752aa458', ], [ 'KeyArn' => 'arn:aws:kms:us-east-2:111122223333:key/b776a44b-df37-4438-9be4-a27494e4271a', 'KeyId' => 'b776a44b-df37-4438-9be4-a27494e4271a', ], [ 'KeyArn' => 'arn:aws:kms:us-east-2:111122223333:key/deaf6c9e-cf2c-46a6-bf6d-0b6d487cffbb', 'KeyId' => 'deaf6c9e-cf2c-46a6-bf6d-0b6d487cffbb', ], ], 'Truncated' => false, ], 'comments' => [ 'output' => [ 'Keys' => 'A list of CMKs, including the key ID and Amazon Resource Name (ARN) of each one.', 'Truncated' => 'A boolean that indicates whether there are more items in the list. Returns true when there are more items, or false when there are not.', ], ], 'description' => 'The following example lists CMKs.', 'id' => 'to-list-cmks-1481071643069', 'title' => 'To list customer master keys (CMKs)', ], ], 'ListResourceTags' => [ [ 'input' => [ 'KeyId' => '1234abcd-12ab-34cd-56ef-1234567890ab', ], 'output' => [ 'Tags' => [ [ 'TagKey' => 'CostCenter', 'TagValue' => '87654', ], [ 'TagKey' => 'CreatedBy', 'TagValue' => 'ExampleUser', ], [ 'TagKey' => 'Purpose', 'TagValue' => 'Test', ], ], 'Truncated' => false, ], 'comments' => [ 'input' => [ 'KeyId' => 'The identifier of the CMK whose tags you are listing. You can use the key ID or the Amazon Resource Name (ARN) of the CMK.', ], 'output' => [ 'Tags' => 'A list of tags.', 'Truncated' => 'A boolean that indicates whether there are more items in the list. Returns true when there are more items, or false when there are not.', ], ], 'description' => 'The following example lists tags for a CMK.', 'id' => 'to-list-tags-for-a-cmk-1483996855796', 'title' => 'To list tags for a customer master key (CMK)', ], ], 'ListRetirableGrants' => [ [ 'input' => [ 'RetiringPrincipal' => 'arn:aws:iam::111122223333:role/ExampleRole', ], 'output' => [ 'Grants' => [ [ 'CreationDate' => '2016-12-07T11:09:35-08:00', 'GrantId' => '0c237476b39f8bc44e45212e08498fbe3151305030726c0590dd8d3e9f3d6a60', 'GranteePrincipal' => 'arn:aws:iam::111122223333:role/ExampleRole', 'IssuingAccount' => 'arn:aws:iam::444455556666:root', 'KeyId' => 'arn:aws:kms:us-east-2:444455556666:key/1234abcd-12ab-34cd-56ef-1234567890ab', 'Operations' => [ 'Decrypt', 'Encrypt', ], 'RetiringPrincipal' => 'arn:aws:iam::111122223333:role/ExampleRole', ], ], 'Truncated' => false, ], 'comments' => [ 'input' => [ 'RetiringPrincipal' => 'The retiring principal whose grants you want to list. Use the Amazon Resource Name (ARN) of an AWS principal such as an AWS account (root), IAM user, federated user, or assumed role user.', ], 'output' => [ 'Grants' => 'A list of grants that the specified principal can retire.', 'Truncated' => 'A boolean that indicates whether there are more items in the list. Returns true when there are more items, or false when there are not.', ], ], 'description' => 'The following example lists the grants that the specified principal (identity) can retire.', 'id' => 'to-list-grants-that-the-specified-principal-can-retire-1481140499620', 'title' => 'To list grants that the specified principal can retire', ], ], 'PutKeyPolicy' => [ [ 'input' => [ 'KeyId' => '1234abcd-12ab-34cd-56ef-1234567890ab', 'Policy' => '{ "Version": "2012-10-17", "Id": "custom-policy-2016-12-07", "Statement": [ { "Sid": "Enable IAM User Permissions", "Effect": "Allow", "Principal": { "AWS": "arn:aws:iam::111122223333:root" }, "Action": "kms:*", "Resource": "*" }, { "Sid": "Allow access for Key Administrators", "Effect": "Allow", "Principal": { "AWS": [ "arn:aws:iam::111122223333:user/ExampleAdminUser", "arn:aws:iam::111122223333:role/ExampleAdminRole" ] }, "Action": [ "kms:Create*", "kms:Describe*", "kms:Enable*", "kms:List*", "kms:Put*", "kms:Update*", "kms:Revoke*", "kms:Disable*", "kms:Get*", "kms:Delete*", "kms:ScheduleKeyDeletion", "kms:CancelKeyDeletion" ], "Resource": "*" }, { "Sid": "Allow use of the key", "Effect": "Allow", "Principal": { "AWS": "arn:aws:iam::111122223333:role/ExamplePowerUserRole" }, "Action": [ "kms:Encrypt", "kms:Decrypt", "kms:ReEncrypt*", "kms:GenerateDataKey*", "kms:DescribeKey" ], "Resource": "*" }, { "Sid": "Allow attachment of persistent resources", "Effect": "Allow", "Principal": { "AWS": "arn:aws:iam::111122223333:role/ExamplePowerUserRole" }, "Action": [ "kms:CreateGrant", "kms:ListGrants", "kms:RevokeGrant" ], "Resource": "*", "Condition": { "Bool": { "kms:GrantIsForAWSResource": "true" } } } ]}', 'PolicyName' => 'default', ], 'comments' => [ 'input' => [ 'KeyId' => 'The identifier of the CMK to attach the key policy to. You can use the key ID or the Amazon Resource Name (ARN) of the CMK.', 'Policy' => 'The key policy document.', 'PolicyName' => 'The name of the key policy.', ], ], 'description' => 'The following example attaches a key policy to the specified CMK.', 'id' => 'to-attach-a-key-policy-to-a-cmk-1481147345018', 'title' => 'To attach a key policy to a customer master key (CMK)', ], ], 'ReEncrypt' => [ [ 'input' => [ 'CiphertextBlob' => '<binary data>', 'DestinationKeyId' => '0987dcba-09fe-87dc-65ba-ab0987654321', ], 'output' => [ 'CiphertextBlob' => '<binary data>', 'KeyId' => 'arn:aws:kms:us-east-2:111122223333:key/0987dcba-09fe-87dc-65ba-ab0987654321', 'SourceKeyId' => 'arn:aws:kms:us-east-2:111122223333:key/1234abcd-12ab-34cd-56ef-1234567890ab', ], 'comments' => [ 'input' => [ 'CiphertextBlob' => 'The data to reencrypt.', 'DestinationKeyId' => 'The identifier of the CMK to use to reencrypt the data. You can use the key ID or Amazon Resource Name (ARN) of the CMK, or the name or ARN of an alias that refers to the CMK.', ], 'output' => [ 'CiphertextBlob' => 'The reencrypted data.', 'KeyId' => 'The ARN of the CMK that was used to reencrypt the data.', 'SourceKeyId' => 'The ARN of the CMK that was used to originally encrypt the data.', ], ], 'description' => 'The following example reencrypts data with the specified CMK.', 'id' => 'to-reencrypt-data-1481230358001', 'title' => 'To reencrypt data', ], ], 'RetireGrant' => [ [ 'input' => [ 'GrantId' => '0c237476b39f8bc44e45212e08498fbe3151305030726c0590dd8d3e9f3d6a60', 'KeyId' => 'arn:aws:kms:us-east-2:444455556666:key/1234abcd-12ab-34cd-56ef-1234567890ab', ], 'comments' => [ 'input' => [ 'GrantId' => 'The identifier of the grant to retire.', 'KeyId' => 'The Amazon Resource Name (ARN) of the customer master key (CMK) associated with the grant.', ], ], 'description' => 'The following example retires a grant.', 'id' => 'to-retire-a-grant-1481327028297', 'title' => 'To retire a grant', ], ], 'RevokeGrant' => [ [ 'input' => [ 'GrantId' => '0c237476b39f8bc44e45212e08498fbe3151305030726c0590dd8d3e9f3d6a60', 'KeyId' => '1234abcd-12ab-34cd-56ef-1234567890ab', ], 'comments' => [ 'input' => [ 'GrantId' => 'The identifier of the grant to revoke.', 'KeyId' => 'The identifier of the customer master key (CMK) associated with the grant. You can use the key ID or the Amazon Resource Name (ARN) of the CMK.', ], ], 'description' => 'The following example revokes a grant.', 'id' => 'to-revoke-a-grant-1481329549302', 'title' => 'To revoke a grant', ], ], 'ScheduleKeyDeletion' => [ [ 'input' => [ 'KeyId' => '1234abcd-12ab-34cd-56ef-1234567890ab', 'PendingWindowInDays' => 7, ], 'output' => [ 'DeletionDate' => '2016-12-17T16:00:00-08:00', 'KeyId' => 'arn:aws:kms:us-east-2:111122223333:key/1234abcd-12ab-34cd-56ef-1234567890ab', ], 'comments' => [ 'input' => [ 'KeyId' => 'The identifier of the CMK to schedule for deletion. You can use the key ID or the Amazon Resource Name (ARN) of the CMK.', 'PendingWindowInDays' => 'The waiting period, specified in number of days. After the waiting period ends, AWS KMS deletes the CMK.', ], 'output' => [ 'DeletionDate' => 'The date and time after which AWS KMS deletes the CMK.', 'KeyId' => 'The ARN of the CMK that is scheduled for deletion.', ], ], 'description' => 'The following example schedules the specified CMK for deletion.', 'id' => 'to-schedule-a-cmk-for-deletion-1481331111094', 'title' => 'To schedule a customer master key (CMK) for deletion', ], ], 'TagResource' => [ [ 'input' => [ 'KeyId' => '1234abcd-12ab-34cd-56ef-1234567890ab', 'Tags' => [ [ 'TagKey' => 'Purpose', 'TagValue' => 'Test', ], ], ], 'comments' => [ 'input' => [ 'KeyId' => 'The identifier of the CMK you are tagging. You can use the key ID or the Amazon Resource Name (ARN) of the CMK.', 'Tags' => 'A list of tags.', ], ], 'description' => 'The following example tags a CMK.', 'id' => 'to-tag-a-cmk-1483997246518', 'title' => 'To tag a customer master key (CMK)', ], ], 'UntagResource' => [ [ 'input' => [ 'KeyId' => '1234abcd-12ab-34cd-56ef-1234567890ab', 'TagKeys' => [ 'Purpose', 'CostCenter', ], ], 'comments' => [ 'input' => [ 'KeyId' => 'The identifier of the CMK whose tags you are removing.', 'TagKeys' => 'A list of tag keys. Provide only the tag keys, not the tag values.', ], ], 'description' => 'The following example removes tags from a CMK.', 'id' => 'to-remove-tags-from-a-cmk-1483997590962', 'title' => 'To remove tags from a customer master key (CMK)', ], ], 'UpdateAlias' => [ [ 'input' => [ 'AliasName' => 'alias/ExampleAlias', 'TargetKeyId' => '1234abcd-12ab-34cd-56ef-1234567890ab', ], 'comments' => [ 'input' => [ 'AliasName' => 'The alias to update.', 'TargetKeyId' => 'The identifier of the CMK that the alias will refer to after this operation succeeds. You can use the key ID or the Amazon Resource Name (ARN) of the CMK.', ], ], 'description' => 'The following example updates the specified alias to refer to the specified customer master key (CMK).', 'id' => 'to-update-an-alias-1481572726920', 'title' => 'To update an alias', ], ], 'UpdateKeyDescription' => [ [ 'input' => [ 'Description' => 'Example description that indicates the intended use of this CMK.', 'KeyId' => '1234abcd-12ab-34cd-56ef-1234567890ab', ], 'comments' => [ 'input' => [ 'Description' => 'The updated description.', 'KeyId' => 'The identifier of the CMK whose description you are updating. You can use the key ID or the Amazon Resource Name (ARN) of the CMK.', ], ], 'description' => 'The following example updates the description of the specified CMK.', 'id' => 'to-update-the-description-of-a-cmk-1481574808619', 'title' => 'To update the description of a customer master key (CMK)', ], ], ],];

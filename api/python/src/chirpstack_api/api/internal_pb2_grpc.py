# Generated by the gRPC Python protocol compiler plugin. DO NOT EDIT!
"""Client and server classes corresponding to protobuf-defined services."""
import grpc

from chirpstack_api.api import internal_pb2 as chirpstack__api_dot_api_dot_internal__pb2
from google.protobuf import empty_pb2 as google_dot_protobuf_dot_empty__pb2


class InternalServiceStub(object):
    """InternalService is the service providing API endpoints for internal usage.
    """

    def __init__(self, channel):
        """Constructor.

        Args:
            channel: A grpc.Channel.
        """
        self.Login = channel.unary_unary(
                '/api.InternalService/Login',
                request_serializer=chirpstack__api_dot_api_dot_internal__pb2.LoginRequest.SerializeToString,
                response_deserializer=chirpstack__api_dot_api_dot_internal__pb2.LoginResponse.FromString,
                )
        self.Profile = channel.unary_unary(
                '/api.InternalService/Profile',
                request_serializer=google_dot_protobuf_dot_empty__pb2.Empty.SerializeToString,
                response_deserializer=chirpstack__api_dot_api_dot_internal__pb2.ProfileResponse.FromString,
                )
        self.GlobalSearch = channel.unary_unary(
                '/api.InternalService/GlobalSearch',
                request_serializer=chirpstack__api_dot_api_dot_internal__pb2.GlobalSearchRequest.SerializeToString,
                response_deserializer=chirpstack__api_dot_api_dot_internal__pb2.GlobalSearchResponse.FromString,
                )
        self.CreateApiKey = channel.unary_unary(
                '/api.InternalService/CreateApiKey',
                request_serializer=chirpstack__api_dot_api_dot_internal__pb2.CreateApiKeyRequest.SerializeToString,
                response_deserializer=chirpstack__api_dot_api_dot_internal__pb2.CreateApiKeyResponse.FromString,
                )
        self.DeleteApiKey = channel.unary_unary(
                '/api.InternalService/DeleteApiKey',
                request_serializer=chirpstack__api_dot_api_dot_internal__pb2.DeleteApiKeyRequest.SerializeToString,
                response_deserializer=google_dot_protobuf_dot_empty__pb2.Empty.FromString,
                )
        self.ListApiKeys = channel.unary_unary(
                '/api.InternalService/ListApiKeys',
                request_serializer=chirpstack__api_dot_api_dot_internal__pb2.ListApiKeysRequest.SerializeToString,
                response_deserializer=chirpstack__api_dot_api_dot_internal__pb2.ListApiKeysResponse.FromString,
                )
        self.Settings = channel.unary_unary(
                '/api.InternalService/Settings',
                request_serializer=google_dot_protobuf_dot_empty__pb2.Empty.SerializeToString,
                response_deserializer=chirpstack__api_dot_api_dot_internal__pb2.SettingsResponse.FromString,
                )
        self.OpenIdConnectLogin = channel.unary_unary(
                '/api.InternalService/OpenIdConnectLogin',
                request_serializer=chirpstack__api_dot_api_dot_internal__pb2.OpenIdConnectLoginRequest.SerializeToString,
                response_deserializer=chirpstack__api_dot_api_dot_internal__pb2.OpenIdConnectLoginResponse.FromString,
                )
        self.OAuth2Login = channel.unary_unary(
                '/api.InternalService/OAuth2Login',
                request_serializer=chirpstack__api_dot_api_dot_internal__pb2.OAuth2LoginRequest.SerializeToString,
                response_deserializer=chirpstack__api_dot_api_dot_internal__pb2.OAuth2LoginResponse.FromString,
                )
        self.GetDevicesSummary = channel.unary_unary(
                '/api.InternalService/GetDevicesSummary',
                request_serializer=chirpstack__api_dot_api_dot_internal__pb2.GetDevicesSummaryRequest.SerializeToString,
                response_deserializer=chirpstack__api_dot_api_dot_internal__pb2.GetDevicesSummaryResponse.FromString,
                )
        self.GetGatewaysSummary = channel.unary_unary(
                '/api.InternalService/GetGatewaysSummary',
                request_serializer=chirpstack__api_dot_api_dot_internal__pb2.GetGatewaysSummaryRequest.SerializeToString,
                response_deserializer=chirpstack__api_dot_api_dot_internal__pb2.GetGatewaysSummaryResponse.FromString,
                )
        self.StreamGatewayFrames = channel.unary_stream(
                '/api.InternalService/StreamGatewayFrames',
                request_serializer=chirpstack__api_dot_api_dot_internal__pb2.StreamGatewayFramesRequest.SerializeToString,
                response_deserializer=chirpstack__api_dot_api_dot_internal__pb2.LogItem.FromString,
                )
        self.StreamDeviceFrames = channel.unary_stream(
                '/api.InternalService/StreamDeviceFrames',
                request_serializer=chirpstack__api_dot_api_dot_internal__pb2.StreamDeviceFramesRequest.SerializeToString,
                response_deserializer=chirpstack__api_dot_api_dot_internal__pb2.LogItem.FromString,
                )
        self.StreamDeviceEvents = channel.unary_stream(
                '/api.InternalService/StreamDeviceEvents',
                request_serializer=chirpstack__api_dot_api_dot_internal__pb2.StreamDeviceEventsRequest.SerializeToString,
                response_deserializer=chirpstack__api_dot_api_dot_internal__pb2.LogItem.FromString,
                )
        self.ListRegions = channel.unary_unary(
                '/api.InternalService/ListRegions',
                request_serializer=google_dot_protobuf_dot_empty__pb2.Empty.SerializeToString,
                response_deserializer=chirpstack__api_dot_api_dot_internal__pb2.ListRegionsResponse.FromString,
                )
        self.GetRegion = channel.unary_unary(
                '/api.InternalService/GetRegion',
                request_serializer=chirpstack__api_dot_api_dot_internal__pb2.GetRegionRequest.SerializeToString,
                response_deserializer=chirpstack__api_dot_api_dot_internal__pb2.GetRegionResponse.FromString,
                )


class InternalServiceServicer(object):
    """InternalService is the service providing API endpoints for internal usage.
    """

    def Login(self, request, context):
        """Log in a user
        """
        context.set_code(grpc.StatusCode.UNIMPLEMENTED)
        context.set_details('Method not implemented!')
        raise NotImplementedError('Method not implemented!')

    def Profile(self, request, context):
        """Get the current user's profile
        """
        context.set_code(grpc.StatusCode.UNIMPLEMENTED)
        context.set_details('Method not implemented!')
        raise NotImplementedError('Method not implemented!')

    def GlobalSearch(self, request, context):
        """Perform a global search.
        """
        context.set_code(grpc.StatusCode.UNIMPLEMENTED)
        context.set_details('Method not implemented!')
        raise NotImplementedError('Method not implemented!')

    def CreateApiKey(self, request, context):
        """CreateApiKey creates the given API key.
        """
        context.set_code(grpc.StatusCode.UNIMPLEMENTED)
        context.set_details('Method not implemented!')
        raise NotImplementedError('Method not implemented!')

    def DeleteApiKey(self, request, context):
        """DeleteApiKey deletes the API key.
        """
        context.set_code(grpc.StatusCode.UNIMPLEMENTED)
        context.set_details('Method not implemented!')
        raise NotImplementedError('Method not implemented!')

    def ListApiKeys(self, request, context):
        """ListApiKeys lists the available API keys.
        """
        context.set_code(grpc.StatusCode.UNIMPLEMENTED)
        context.set_details('Method not implemented!')
        raise NotImplementedError('Method not implemented!')

    def Settings(self, request, context):
        """Get the global settings.
        """
        context.set_code(grpc.StatusCode.UNIMPLEMENTED)
        context.set_details('Method not implemented!')
        raise NotImplementedError('Method not implemented!')

    def OpenIdConnectLogin(self, request, context):
        """OpenId Connect login.
        """
        context.set_code(grpc.StatusCode.UNIMPLEMENTED)
        context.set_details('Method not implemented!')
        raise NotImplementedError('Method not implemented!')

    def OAuth2Login(self, request, context):
        """OAuth2 login.
        """
        context.set_code(grpc.StatusCode.UNIMPLEMENTED)
        context.set_details('Method not implemented!')
        raise NotImplementedError('Method not implemented!')

    def GetDevicesSummary(self, request, context):
        """GetDevicesSummary returns an aggregated summary of the devices.
        """
        context.set_code(grpc.StatusCode.UNIMPLEMENTED)
        context.set_details('Method not implemented!')
        raise NotImplementedError('Method not implemented!')

    def GetGatewaysSummary(self, request, context):
        """GetGatewaysSummary returns an aggregated summary of the gateways.
        """
        context.set_code(grpc.StatusCode.UNIMPLEMENTED)
        context.set_details('Method not implemented!')
        raise NotImplementedError('Method not implemented!')

    def StreamGatewayFrames(self, request, context):
        """Stream frame for the given Gateway ID.
        """
        context.set_code(grpc.StatusCode.UNIMPLEMENTED)
        context.set_details('Method not implemented!')
        raise NotImplementedError('Method not implemented!')

    def StreamDeviceFrames(self, request, context):
        """Stream frames for the given Device EUI.
        """
        context.set_code(grpc.StatusCode.UNIMPLEMENTED)
        context.set_details('Method not implemented!')
        raise NotImplementedError('Method not implemented!')

    def StreamDeviceEvents(self, request, context):
        """Stream events for the given Device EUI.
        """
        context.set_code(grpc.StatusCode.UNIMPLEMENTED)
        context.set_details('Method not implemented!')
        raise NotImplementedError('Method not implemented!')

    def ListRegions(self, request, context):
        """ListRegions lists the available (configured) regions.
        """
        context.set_code(grpc.StatusCode.UNIMPLEMENTED)
        context.set_details('Method not implemented!')
        raise NotImplementedError('Method not implemented!')

    def GetRegion(self, request, context):
        """GetRegion returns the region details for the given region.
        """
        context.set_code(grpc.StatusCode.UNIMPLEMENTED)
        context.set_details('Method not implemented!')
        raise NotImplementedError('Method not implemented!')


def add_InternalServiceServicer_to_server(servicer, server):
    rpc_method_handlers = {
            'Login': grpc.unary_unary_rpc_method_handler(
                    servicer.Login,
                    request_deserializer=chirpstack__api_dot_api_dot_internal__pb2.LoginRequest.FromString,
                    response_serializer=chirpstack__api_dot_api_dot_internal__pb2.LoginResponse.SerializeToString,
            ),
            'Profile': grpc.unary_unary_rpc_method_handler(
                    servicer.Profile,
                    request_deserializer=google_dot_protobuf_dot_empty__pb2.Empty.FromString,
                    response_serializer=chirpstack__api_dot_api_dot_internal__pb2.ProfileResponse.SerializeToString,
            ),
            'GlobalSearch': grpc.unary_unary_rpc_method_handler(
                    servicer.GlobalSearch,
                    request_deserializer=chirpstack__api_dot_api_dot_internal__pb2.GlobalSearchRequest.FromString,
                    response_serializer=chirpstack__api_dot_api_dot_internal__pb2.GlobalSearchResponse.SerializeToString,
            ),
            'CreateApiKey': grpc.unary_unary_rpc_method_handler(
                    servicer.CreateApiKey,
                    request_deserializer=chirpstack__api_dot_api_dot_internal__pb2.CreateApiKeyRequest.FromString,
                    response_serializer=chirpstack__api_dot_api_dot_internal__pb2.CreateApiKeyResponse.SerializeToString,
            ),
            'DeleteApiKey': grpc.unary_unary_rpc_method_handler(
                    servicer.DeleteApiKey,
                    request_deserializer=chirpstack__api_dot_api_dot_internal__pb2.DeleteApiKeyRequest.FromString,
                    response_serializer=google_dot_protobuf_dot_empty__pb2.Empty.SerializeToString,
            ),
            'ListApiKeys': grpc.unary_unary_rpc_method_handler(
                    servicer.ListApiKeys,
                    request_deserializer=chirpstack__api_dot_api_dot_internal__pb2.ListApiKeysRequest.FromString,
                    response_serializer=chirpstack__api_dot_api_dot_internal__pb2.ListApiKeysResponse.SerializeToString,
            ),
            'Settings': grpc.unary_unary_rpc_method_handler(
                    servicer.Settings,
                    request_deserializer=google_dot_protobuf_dot_empty__pb2.Empty.FromString,
                    response_serializer=chirpstack__api_dot_api_dot_internal__pb2.SettingsResponse.SerializeToString,
            ),
            'OpenIdConnectLogin': grpc.unary_unary_rpc_method_handler(
                    servicer.OpenIdConnectLogin,
                    request_deserializer=chirpstack__api_dot_api_dot_internal__pb2.OpenIdConnectLoginRequest.FromString,
                    response_serializer=chirpstack__api_dot_api_dot_internal__pb2.OpenIdConnectLoginResponse.SerializeToString,
            ),
            'OAuth2Login': grpc.unary_unary_rpc_method_handler(
                    servicer.OAuth2Login,
                    request_deserializer=chirpstack__api_dot_api_dot_internal__pb2.OAuth2LoginRequest.FromString,
                    response_serializer=chirpstack__api_dot_api_dot_internal__pb2.OAuth2LoginResponse.SerializeToString,
            ),
            'GetDevicesSummary': grpc.unary_unary_rpc_method_handler(
                    servicer.GetDevicesSummary,
                    request_deserializer=chirpstack__api_dot_api_dot_internal__pb2.GetDevicesSummaryRequest.FromString,
                    response_serializer=chirpstack__api_dot_api_dot_internal__pb2.GetDevicesSummaryResponse.SerializeToString,
            ),
            'GetGatewaysSummary': grpc.unary_unary_rpc_method_handler(
                    servicer.GetGatewaysSummary,
                    request_deserializer=chirpstack__api_dot_api_dot_internal__pb2.GetGatewaysSummaryRequest.FromString,
                    response_serializer=chirpstack__api_dot_api_dot_internal__pb2.GetGatewaysSummaryResponse.SerializeToString,
            ),
            'StreamGatewayFrames': grpc.unary_stream_rpc_method_handler(
                    servicer.StreamGatewayFrames,
                    request_deserializer=chirpstack__api_dot_api_dot_internal__pb2.StreamGatewayFramesRequest.FromString,
                    response_serializer=chirpstack__api_dot_api_dot_internal__pb2.LogItem.SerializeToString,
            ),
            'StreamDeviceFrames': grpc.unary_stream_rpc_method_handler(
                    servicer.StreamDeviceFrames,
                    request_deserializer=chirpstack__api_dot_api_dot_internal__pb2.StreamDeviceFramesRequest.FromString,
                    response_serializer=chirpstack__api_dot_api_dot_internal__pb2.LogItem.SerializeToString,
            ),
            'StreamDeviceEvents': grpc.unary_stream_rpc_method_handler(
                    servicer.StreamDeviceEvents,
                    request_deserializer=chirpstack__api_dot_api_dot_internal__pb2.StreamDeviceEventsRequest.FromString,
                    response_serializer=chirpstack__api_dot_api_dot_internal__pb2.LogItem.SerializeToString,
            ),
            'ListRegions': grpc.unary_unary_rpc_method_handler(
                    servicer.ListRegions,
                    request_deserializer=google_dot_protobuf_dot_empty__pb2.Empty.FromString,
                    response_serializer=chirpstack__api_dot_api_dot_internal__pb2.ListRegionsResponse.SerializeToString,
            ),
            'GetRegion': grpc.unary_unary_rpc_method_handler(
                    servicer.GetRegion,
                    request_deserializer=chirpstack__api_dot_api_dot_internal__pb2.GetRegionRequest.FromString,
                    response_serializer=chirpstack__api_dot_api_dot_internal__pb2.GetRegionResponse.SerializeToString,
            ),
    }
    generic_handler = grpc.method_handlers_generic_handler(
            'api.InternalService', rpc_method_handlers)
    server.add_generic_rpc_handlers((generic_handler,))


 # This class is part of an EXPERIMENTAL API.
class InternalService(object):
    """InternalService is the service providing API endpoints for internal usage.
    """

    @staticmethod
    def Login(request,
            target,
            options=(),
            channel_credentials=None,
            call_credentials=None,
            insecure=False,
            compression=None,
            wait_for_ready=None,
            timeout=None,
            metadata=None):
        return grpc.experimental.unary_unary(request, target, '/api.InternalService/Login',
            chirpstack__api_dot_api_dot_internal__pb2.LoginRequest.SerializeToString,
            chirpstack__api_dot_api_dot_internal__pb2.LoginResponse.FromString,
            options, channel_credentials,
            insecure, call_credentials, compression, wait_for_ready, timeout, metadata)

    @staticmethod
    def Profile(request,
            target,
            options=(),
            channel_credentials=None,
            call_credentials=None,
            insecure=False,
            compression=None,
            wait_for_ready=None,
            timeout=None,
            metadata=None):
        return grpc.experimental.unary_unary(request, target, '/api.InternalService/Profile',
            google_dot_protobuf_dot_empty__pb2.Empty.SerializeToString,
            chirpstack__api_dot_api_dot_internal__pb2.ProfileResponse.FromString,
            options, channel_credentials,
            insecure, call_credentials, compression, wait_for_ready, timeout, metadata)

    @staticmethod
    def GlobalSearch(request,
            target,
            options=(),
            channel_credentials=None,
            call_credentials=None,
            insecure=False,
            compression=None,
            wait_for_ready=None,
            timeout=None,
            metadata=None):
        return grpc.experimental.unary_unary(request, target, '/api.InternalService/GlobalSearch',
            chirpstack__api_dot_api_dot_internal__pb2.GlobalSearchRequest.SerializeToString,
            chirpstack__api_dot_api_dot_internal__pb2.GlobalSearchResponse.FromString,
            options, channel_credentials,
            insecure, call_credentials, compression, wait_for_ready, timeout, metadata)

    @staticmethod
    def CreateApiKey(request,
            target,
            options=(),
            channel_credentials=None,
            call_credentials=None,
            insecure=False,
            compression=None,
            wait_for_ready=None,
            timeout=None,
            metadata=None):
        return grpc.experimental.unary_unary(request, target, '/api.InternalService/CreateApiKey',
            chirpstack__api_dot_api_dot_internal__pb2.CreateApiKeyRequest.SerializeToString,
            chirpstack__api_dot_api_dot_internal__pb2.CreateApiKeyResponse.FromString,
            options, channel_credentials,
            insecure, call_credentials, compression, wait_for_ready, timeout, metadata)

    @staticmethod
    def DeleteApiKey(request,
            target,
            options=(),
            channel_credentials=None,
            call_credentials=None,
            insecure=False,
            compression=None,
            wait_for_ready=None,
            timeout=None,
            metadata=None):
        return grpc.experimental.unary_unary(request, target, '/api.InternalService/DeleteApiKey',
            chirpstack__api_dot_api_dot_internal__pb2.DeleteApiKeyRequest.SerializeToString,
            google_dot_protobuf_dot_empty__pb2.Empty.FromString,
            options, channel_credentials,
            insecure, call_credentials, compression, wait_for_ready, timeout, metadata)

    @staticmethod
    def ListApiKeys(request,
            target,
            options=(),
            channel_credentials=None,
            call_credentials=None,
            insecure=False,
            compression=None,
            wait_for_ready=None,
            timeout=None,
            metadata=None):
        return grpc.experimental.unary_unary(request, target, '/api.InternalService/ListApiKeys',
            chirpstack__api_dot_api_dot_internal__pb2.ListApiKeysRequest.SerializeToString,
            chirpstack__api_dot_api_dot_internal__pb2.ListApiKeysResponse.FromString,
            options, channel_credentials,
            insecure, call_credentials, compression, wait_for_ready, timeout, metadata)

    @staticmethod
    def Settings(request,
            target,
            options=(),
            channel_credentials=None,
            call_credentials=None,
            insecure=False,
            compression=None,
            wait_for_ready=None,
            timeout=None,
            metadata=None):
        return grpc.experimental.unary_unary(request, target, '/api.InternalService/Settings',
            google_dot_protobuf_dot_empty__pb2.Empty.SerializeToString,
            chirpstack__api_dot_api_dot_internal__pb2.SettingsResponse.FromString,
            options, channel_credentials,
            insecure, call_credentials, compression, wait_for_ready, timeout, metadata)

    @staticmethod
    def OpenIdConnectLogin(request,
            target,
            options=(),
            channel_credentials=None,
            call_credentials=None,
            insecure=False,
            compression=None,
            wait_for_ready=None,
            timeout=None,
            metadata=None):
        return grpc.experimental.unary_unary(request, target, '/api.InternalService/OpenIdConnectLogin',
            chirpstack__api_dot_api_dot_internal__pb2.OpenIdConnectLoginRequest.SerializeToString,
            chirpstack__api_dot_api_dot_internal__pb2.OpenIdConnectLoginResponse.FromString,
            options, channel_credentials,
            insecure, call_credentials, compression, wait_for_ready, timeout, metadata)

    @staticmethod
    def OAuth2Login(request,
            target,
            options=(),
            channel_credentials=None,
            call_credentials=None,
            insecure=False,
            compression=None,
            wait_for_ready=None,
            timeout=None,
            metadata=None):
        return grpc.experimental.unary_unary(request, target, '/api.InternalService/OAuth2Login',
            chirpstack__api_dot_api_dot_internal__pb2.OAuth2LoginRequest.SerializeToString,
            chirpstack__api_dot_api_dot_internal__pb2.OAuth2LoginResponse.FromString,
            options, channel_credentials,
            insecure, call_credentials, compression, wait_for_ready, timeout, metadata)

    @staticmethod
    def GetDevicesSummary(request,
            target,
            options=(),
            channel_credentials=None,
            call_credentials=None,
            insecure=False,
            compression=None,
            wait_for_ready=None,
            timeout=None,
            metadata=None):
        return grpc.experimental.unary_unary(request, target, '/api.InternalService/GetDevicesSummary',
            chirpstack__api_dot_api_dot_internal__pb2.GetDevicesSummaryRequest.SerializeToString,
            chirpstack__api_dot_api_dot_internal__pb2.GetDevicesSummaryResponse.FromString,
            options, channel_credentials,
            insecure, call_credentials, compression, wait_for_ready, timeout, metadata)

    @staticmethod
    def GetGatewaysSummary(request,
            target,
            options=(),
            channel_credentials=None,
            call_credentials=None,
            insecure=False,
            compression=None,
            wait_for_ready=None,
            timeout=None,
            metadata=None):
        return grpc.experimental.unary_unary(request, target, '/api.InternalService/GetGatewaysSummary',
            chirpstack__api_dot_api_dot_internal__pb2.GetGatewaysSummaryRequest.SerializeToString,
            chirpstack__api_dot_api_dot_internal__pb2.GetGatewaysSummaryResponse.FromString,
            options, channel_credentials,
            insecure, call_credentials, compression, wait_for_ready, timeout, metadata)

    @staticmethod
    def StreamGatewayFrames(request,
            target,
            options=(),
            channel_credentials=None,
            call_credentials=None,
            insecure=False,
            compression=None,
            wait_for_ready=None,
            timeout=None,
            metadata=None):
        return grpc.experimental.unary_stream(request, target, '/api.InternalService/StreamGatewayFrames',
            chirpstack__api_dot_api_dot_internal__pb2.StreamGatewayFramesRequest.SerializeToString,
            chirpstack__api_dot_api_dot_internal__pb2.LogItem.FromString,
            options, channel_credentials,
            insecure, call_credentials, compression, wait_for_ready, timeout, metadata)

    @staticmethod
    def StreamDeviceFrames(request,
            target,
            options=(),
            channel_credentials=None,
            call_credentials=None,
            insecure=False,
            compression=None,
            wait_for_ready=None,
            timeout=None,
            metadata=None):
        return grpc.experimental.unary_stream(request, target, '/api.InternalService/StreamDeviceFrames',
            chirpstack__api_dot_api_dot_internal__pb2.StreamDeviceFramesRequest.SerializeToString,
            chirpstack__api_dot_api_dot_internal__pb2.LogItem.FromString,
            options, channel_credentials,
            insecure, call_credentials, compression, wait_for_ready, timeout, metadata)

    @staticmethod
    def StreamDeviceEvents(request,
            target,
            options=(),
            channel_credentials=None,
            call_credentials=None,
            insecure=False,
            compression=None,
            wait_for_ready=None,
            timeout=None,
            metadata=None):
        return grpc.experimental.unary_stream(request, target, '/api.InternalService/StreamDeviceEvents',
            chirpstack__api_dot_api_dot_internal__pb2.StreamDeviceEventsRequest.SerializeToString,
            chirpstack__api_dot_api_dot_internal__pb2.LogItem.FromString,
            options, channel_credentials,
            insecure, call_credentials, compression, wait_for_ready, timeout, metadata)

    @staticmethod
    def ListRegions(request,
            target,
            options=(),
            channel_credentials=None,
            call_credentials=None,
            insecure=False,
            compression=None,
            wait_for_ready=None,
            timeout=None,
            metadata=None):
        return grpc.experimental.unary_unary(request, target, '/api.InternalService/ListRegions',
            google_dot_protobuf_dot_empty__pb2.Empty.SerializeToString,
            chirpstack__api_dot_api_dot_internal__pb2.ListRegionsResponse.FromString,
            options, channel_credentials,
            insecure, call_credentials, compression, wait_for_ready, timeout, metadata)

    @staticmethod
    def GetRegion(request,
            target,
            options=(),
            channel_credentials=None,
            call_credentials=None,
            insecure=False,
            compression=None,
            wait_for_ready=None,
            timeout=None,
            metadata=None):
        return grpc.experimental.unary_unary(request, target, '/api.InternalService/GetRegion',
            chirpstack__api_dot_api_dot_internal__pb2.GetRegionRequest.SerializeToString,
            chirpstack__api_dot_api_dot_internal__pb2.GetRegionResponse.FromString,
            options, channel_credentials,
            insecure, call_credentials, compression, wait_for_ready, timeout, metadata)
